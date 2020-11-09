<?php
/**
 * Controller User
 */
class CustomerController extends Controller
{

    public function index()
    {
        $data = array();

        $data['title']      = 'รายการสมาชิก';
        $data['breadcrumb'] = array(
            'หน้าหลัก'     => route('home'),
            'รายการสมาชิก' => route('customer'),
        );

        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        $filter          = array();
        $customer        = $this->model('customer');
        $data['results'] = $customer->getLists($filter);

        $data['link_add'] = route('customer/add');

        $this->view('customer/list', $data);
    }

    public function add()
    {
        $data           = array();
        $data['result'] = array();

        $data['title']      = 'เพิ่มสมาชิก';
        $data['breadcrumb'] = array(
            'หน้าหลัก'     => route('home'),
            'รายการสมาชิก' => route('customer'),
            'เพิ่มสมาชิก'  => route('customer/add'),
        );

        $data['member_info']['email'] = '';
        $data['member_info']['firstname'] = '';
        $data['member_info']['lastname'] = '';
        $data['member_info']['telephone'] = '';
        $data['member_info']['laboratory'] = '';
        $data['member_info']['hospital'] = '';
        $data['member_info']['type_hospital'] = '';
        $data['member_info']['building'] ='';
        $data['member_info']['floor'] ='';
        $data['member_info']['address_1'] = '';
        $data['member_info']['address_2'] ='';
        $data['member_info']['district'] = '';
        $data['member_info']['city'] = '';
        $data['member_info']['province'] = '';
        $data['member_info']['zipcode'] = '';
        $data['member_info']['office_telephone'] = '';
        $data['member_info']['fax'] = '';

        $data['hide_member_no'] = false;

        $customer = $this->model('customer');
        if (method_post()) {
            $result = $customer->add($_POST);
            if ($result > 0) {
                $this->setSession('success', 'Add Success');
            } else {
                $this->setSession('error', 'Fail Add');
            }
            redirect('customer');
            exit();
        }

        $data['action'] = route('customer/add');
        $data['ajax'] = route('customer/checkEmail');

        $this->view('customer/form', $data);
    }

    public function edit()
    {
        $data = array();

        $data['title']      = 'แก้ไขสมาชิก';
        $data['breadcrumb'] = array(
            'หน้าหลัก'     => route('home'),
            'รายการสมาชิก' => route('customer'),
            'แก้ไขสมาชิก'  => route('customer/edit'),
        );

        $style = array(
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css',
        );
        $data['style'] = $style;
        $script        = array(
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js',
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js',
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js',
        );
        $data['script'] = $script;

        $id                  = get('id');
        $customer            = $this->model('customer');
        $result              = $customer->getList($id);
        $result['member_no'] = sprintf('%04d', $id);
        $data['member_info'] = $result;

        $data['hide_member_no'] = true;

        if (method_post()) {
            $result = $customer->edit($_POST, $id);
            if ($result > 0) {
                $this->setSession('success', 'แก้ไขข้อมูลสมาชิกเรียบร้อยแล้ว');
            } else {
                $this->setSession('error', 'เกิดข้อผิดพลาดในการแก้ไขข้อมูลสมาชิก');
            }
            redirect('customer');
            exit();
        }

        $data['result'] = $customer->getList($id);
        $data['action'] = route('customer/edit','&id='.$id);
        $data['ajax'] = route('customer/checkEmail');

        $this->view('customer/form', $data);
    }

    public function del()
    {
        $id       = get('id');
        $customer = $this->model('customer');
        $result   = $customer->del($id);
        if ($result == 1) {
            $this->setSession('success', 'Del Success');
        } else {
            $this->setSession('error', 'Fail Del');
        }
        redirect('customer');
        exit();
    }

    public function ajaxList()
    {
        $data                    = array();
        $filter                  = array();
        $customer                = $this->model('customer');
        $results                 = $customer->getLists($filter);
        $data['recordsFiltered'] = count($results);

        $order_list   = array('id', 'email', 'firstname', 'laboratory', 'date_login');
        $order        = (isset($_POST['order'][0]['column'])) ? $order_list[$_POST['order'][0]['column']] : '';
        $by           = (isset($_POST['order'][0]['dir'])) ? $_POST['order'][0]['dir'] : '';
        $results      = $customer->getLists($filter, $order, $by, post('start'), post('length'));
        $i            = 1;
        $data['data'] = array();
        foreach ($results as $key => $value) {
            $action = '<div class="btn-group btn-group-toggle" data-toggle="buttons">';
            $action .= '<a href="' . route('customer/edit', '&id=' . $value['id']) . '" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>';
            $action .= '<a href="' . route('customer/del', '&id=' . $value['id']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'ยืนยันการลบข้อมูล\');"><i class="fas fa-trash-alt"></i> ลบ</a>';
            $action .= '</div>';
            $data['data'][] = array(
                'no'         => $i++,
                'email'      => $value['email'],
                'name'       => $value['firstname'] . ' ' . $value['lastname'],
                'laboratory' => $value['laboratory'],
                'date_login' => generate_date_today('Y-m-d', strtotime($value['date_login']), 'th'),
                'action'     => $action,
            );
        }
        $data['draw']         = post('draw');
        $data['recordsTotal'] = post('length');
        $this->json($data);
    }

    public function checkEmail()
    { // ajax page register check email
        $data           = array();
        $customer         = $this->model('customer');
        $result         = $customer->findEmail(post('email'));
        $data['result'] = $result;

        $this->json($data);
    }
}
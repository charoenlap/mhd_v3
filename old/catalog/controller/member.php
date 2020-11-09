<?php
/**
 * Controller Member
 */
class MemberController extends Controller
{

    public function index()
    {
        $data = array();
        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        $data['title'] = 'ตรวจสอบและแก้ไขข้อมูลส่วนตัว';

        $filter          = array();
        $member          = $this->model('member');
        $data['results'] = $member->getLists($filter);

        $data['link_add'] = route('member/add');

        $this->view('member/list', $data);
    }

    public function add()
    {
        $data           = array();
        $data['result'] = array();

        $member = $this->model('member');
        if (method_post()) {
            $result = $member->add($_POST);
            if ($result > 0) {
                $this->setSession('success', 'Add Success');
            } else {
                $this->setSession('error', 'Fail Add');
            }
            redirect('member');
            exit();
        }

        $data['action'] = route('member/add');

        $this->view('member/form', $data);
    }

    public function edit()
    {
        $data                     = array();
        $data['title']            = 'แก้ไขข้อมูล';
        $token                    = json_decode(decrypt($this->getSession('token')), true);
        $id                       = $token['id'];
        $member                   = $this->model('member');
        $result_info              = $member->getList($id);
        $result_info['member_no'] = sprintf('%04d', $result_info['id']);
        $data['member_info']      = $result_info;

        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        if (method_post()) {
            $_POST['date_modify'] = date('Y-m-d H:i:s', time());
            $result               = $member->edit($_POST, $id);
            if ($result > 0) {
                $this->setSession('success', 'แก้ไขข้อมูลส่วนตัวเรียบร้อยแล้ว');

                $member      = $this->model('member');
                $result_info = $member->getList($id);
                $member_info = array(
                    'id'        => $result_info['id'],
                    'member_no' => sprintf('%04d', $result_info['id']),
                    'email'     => $result_info['email'],
                    'name'      => $result_info['firstname'] . ' ' . $result_info['lastname'],
                );
                $this->rmSession('token');
                $this->setSession('token', encrypt(json_encode($member_info)));
            } else {
                $this->setSession('error', 'เกิดข้อผิดพลาดในการแก้ไขข้อมูลส่วนตัว');
            }
            redirect('member/edit');
            exit();
        }

        $data['result'] = $member->getList($id);
        $data['action'] = route('member/edit');

        $this->view('member/form', $data);
    }

    public function del()
    {
        $id     = get('id');
        $member = $this->model('member');
        $result = $member->del($id);
        if ($result == 1) {
            $this->setSession('success', 'Del Success');
        } else {
            $this->setSession('error', 'Fail Del');
        }
        redirect('member');
    }

    public function login()
    {
        $data          = array();
        $data['title'] = "Login";
        $style         = array(
            'assets/home.css',
        );
        $data['style']         = $style;
        $data['action']        = route('member/login');
        $data['forgot']        = route('member/forgot');
        $data['link_register'] = route('member/register');

        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        if (method_post() && $this->validateLogin()) {
            $email    = post('email');
            $password = md5(KEY . post('password'));
            $member   = $this->model('member');
            $result   = $member->login($email, $password);
            if ($result != false && is_array($result)) {
                if ($result['status'] == 3) {
                    $member_info = array(
                        'id'        => $result['id'],
                        'member_no' => sprintf('%04d', $result['id']),
                        'email'     => $result['email'],
                        'name'      => $result['firstname'] . ' ' . $result['lastname'],
                    );
                    $this->setSession('token', encrypt(json_encode($member_info)));
                    redirect('home');
                } else {
                    $this->rmSession('token');
                    $this->setSession('error', 'ชื่อผู้ใช้งานนี้ยังไม่ได้ยืนยันตัวตนในอีเมล กรุณาคลิกลิงค์อีเมลที่ได้รับ หากไม่ได้รับอีเมลกรุณาติดต่อเจ้าหน้าที่');
                    redirect('member/login');
                }
            } else {
                $this->rmSession('token');
                $this->setSession('error', 'ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');
                redirect('member/login');
            }
        }

        $this->view('member/login', $data);
    }

    public function register()
    {
        $data          = array();
        $data['title'] = "Register";
        $style         = array(
            'assets/home.css',
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css',
        );
        $data['style'] = $style;
        $script        = array(
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js',
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js',
            'assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js',
        );
        $data['script'] = $script;

        $data['link_login'] = route('home');
        $data['action']     = route('member/register');
        $data['ajax']       = route('member/checkEmail');

        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        if (method_post() && $this->validateRegsiter()) {
            print_r($_POST);
            $input                = $_POST;
            $ran                  = rand(10000, 99999);
            $input['status']      = 1;
            $input['password']    = md5(KEY . $ran);
            $input['date_added']  = date('Y-m-d H:i:s', time());
            $input['date_modify'] = date('Y-m-d H:i:s', time());
            $member               = $this->model('member');
            $id                   = $member->add($input);
            if ($id > 0) {
                $get    = encrypt(json_encode(array('email' => $input['email'], 'pass' => $ran, 'id' => $id)));
                $result = sendmailSmtp($input['email'], 'Register - โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก', $this->getHtml('mail/register&data=' . $get));

                if ($result['status']) {
                    $member->edit(array('status' => 2), $id);
                    $this->setSession('success', 'สมัครสมาชิกเรียบร้อย กรุณาตรวจสอบอีเมล');
                } else {
                    $this->setSession('error', 'สมัครสมาชิกเรียบร้อย แต่เกิดข้อผิดพลาดในการส่งอีเมล กรุณาติดต่อเจ้าหน้าที่');
                }
            } else {
                $this->setSession('error', 'เกิดข้อผิดพลาดในการ สมัครสมาชิก');
            }
            redirect('member/register');
        }

        $this->view('member/register', $data);
    }

    public function logout()
    {
        $this->rmSession('token');
        $this->rmSession('member_info');
        redirect('member/login');
        exit();
    }

    public function forgot()
    {
        $data          = array();
        $data['title'] = "Forgot Password";
        $style         = array(
            'assets/home.css',
        );
        $data['style']      = $style;
        $data['action']     = route('member/forgot');
        $data['link_login'] = route('home');

        if ($this->hasSession('success')) {
            $data['success'] = $this->getSession('success');
            $this->rmSession('success');
        }
        if ($this->hasSession('error')) {
            $data['error'] = $this->getSession('error');
            $this->rmSession('error');
        }

        if (method_post()) {
            if (empty($_POST['email'])) {
                $this->setSession('error', 'กรุณากรอกอีเมล');
                redirect('member/forgot');
            }
            $member = $this->model('member');
            if ($member->findEmail(post('email')) == true) {
                $get    = encrypt(json_encode(array('email' => post('email'))));
                $result = sendmailSmtp(post('email'), 'Forgot password - โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก', $this->getHtml('mail/forgot&data=' . $get));
                if ($result['status']) {
                    $this->setSession('success', 'ส่งอีเมลเปลี่ยนรหัสผ่านเรียบร้อยแล้ว กรุณาตรวจสอบอีเมล');
                } else {
                    $this->setSession('error', 'แต่เกิดข้อผิดพลาดในการส่งอีเมลเปลี่ยนรหัสผ่าน กรุณาติดต่อเจ้าหน้าที่');
                }
            }
        }

        $this->view('member/forgot', $data);
    }

    public function validateLogin()
    {
        if (!isset($_POST['email']) || empty($_POST['email']) || !filter_var(post('email'), FILTER_VALIDATE_EMAIL)) {
            $this->setSession('error', 'กรุณากรอกอีเมล');
            redirect('member/login');
        }
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $this->setSession('error', 'กรุณากรอกรหัสผ่าน');
            redirect('member/login');
        }
        return true;
    }

    public function validateRegsiter()
    {
        if (!isset($_POST['email']) || empty($_POST['email']) || !filter_var(post('email'), FILTER_VALIDATE_EMAIL)) {
            $this->setSession('error', 'กรุณากรอกอีเมล');
            redirect('member/register');
        }
        $check = array(
            'firstname'        => 'กรุณากรอกชื่อจริง',
            'lastname'         => 'กรุณากรอกนามสกุล',
            'telephone'        => 'กรุณากรอกเบอร์โทรศัพท์มือถือ',
            'laboratory'       => 'กรุณากรอกชื่อห้องปฏิบัติการ',
            'hospital'         => 'กรุณากรอกชื่อโรงพยาบาล',
            'address_1'        => 'กรุณากรอกที่อยู่ให้ครบ',
            'district'         => 'กรุณากรอก แขวง',
            'city'             => 'กรุณากรอก เขต',
            'province'         => 'กรุณากรอก จังหวัด',
            'zipcode'          => 'กรุณากรอก เลขไปษณีย์',
            'office_telephone' => 'กรุณากรอกเบอร์ติดต่อห้องปฏิบัติการหรือโรงพยาบาล',
        );
        foreach ($check as $key => $value) {
            if (!isset($_POST[$key]) || empty($_POST[$key])) {
                $this->setSession('error', $value);
                redirect('member/register');
            }
        }
        return true;
    }

    public function checkEmail()
    { // ajax page register check email
        $data           = array();
        $member         = $this->model('member');
        $result         = $member->findEmail(post('email'));
        $data['result'] = $result;

        $this->json($data);
    }

    public function confirm()
    { // link confirm register in email
        $data   = array();
        $id     = decrypt(trim(get('e')));
        $member = $this->model('member');
        $result = $member->edit(array('status' => 3), $id);
        if ($result == 1) {
            $this->setSession('success', 'ยืนยันการสมัครสมาชิก ท่านสามารถเข้าสู่ระบบได้');
        } else {
            $this->setSession('error', 'ระบบไม่สามารถยืนยันการสมัครสมาชิกได้ กรุณาติดต่อเจ้าหน้าที่');
        }
        redirect('member/login');
    }

    public function changepass()
    { // link confirm change password in email
        $data   = array();
        $array  = json_decode(decrypt(trim(get('e'))), true);
        $id     = $array['id'];
        $member = $this->model('member');
        $result = $member->edit(array('password' => $array['password']), $id);
        if ($result == 1) {
            $this->setSession('success', 'เปลี่ยนรหัสสมาชิก ท่านสามารถเข้าสู่ระบบได้');
        } else {
            $this->setSession('error', 'ระบบไม่สามารถเปลี่ยนรหัสสมาชิกได้ กรุณาติดต่อเจ้าหน้าที่');
        }
        redirect('member/login');
    }
}

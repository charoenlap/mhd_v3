<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Content extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function category($category_id = null)
  {
    $data = array();
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');
    $data['uploadFailed'] = $this->session->has_userdata('uploadFailed') ? $this->session->uploadFailed : '';
    $this->session->unset_userdata('uploadFailed');
    $data['uploadSuccess'] = $this->session->has_userdata('uploadSuccess') ? $this->session->uploadSuccess : '';
    $this->session->unset_userdata('uploadSuccess');
    $data['heading_title'] = 'เนื้อหา';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home')
    );
    $data['lists'] = array();

    if ($category_id == null) {
      $data['lists'] = $this->initList();
    } else {
      $filter['parent'] = $category_id;
      $filter['del'] = 0;
      $filter['hide'] = 0;
      $data['lists'] = $this->model_content->getCatLists($filter);

      $category_info = $this->model_content->getCatList($category_id);
      $data['heading_title'] = 'Content';
    }

    $data['pagination'] = '';
    $this->load->template('admin/content/category', $data);
  }

  public function initList()
  {
    $list = array();

    $param = new stdClass();
    $param->name = 'รูปหน้าหลัก';
    $param->link = base_url('admin/content/edit/57/184/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'โครงการ';
    $param->link = base_url('admin/content/list/58/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'ข่าวประชาสัมพันธ์';
    $param->link = base_url('admin/content/list/59/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'ดาวน์โหลดเอกสารและคู่มือ';
    $param->link = base_url('admin/content/list/71/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'การประเมินความพึงพอใจ';
    $param->link = base_url('admin/content/list/72/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'เกี่ยวกับโครงการ';
    $param->link = base_url('admin/content/content_cat/73/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'ใบสมัครสมาชิก';
    $param->link = base_url('admin/content/list/81/');
    $list[] = $param;

    $param = new stdClass();
    $param->name = 'About Of Schemes';
    $param->link = base_url('admin/content/list/79/');
    $list[] = $param;

    return $list;
  }

  public function list($category_id = null)
  {
    $data = array();
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');
    $data['uploadFailed'] = $this->session->has_userdata('uploadFailed') ? $this->session->uploadFailed : '';
    $this->session->unset_userdata('uploadFailed');
    $data['uploadSuccess'] = $this->session->has_userdata('uploadSuccess') ? $this->session->uploadSuccess : '';
    $this->session->unset_userdata('uploadSuccess');
    $data['heading_title'] = 'เนื้อหา';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'จัดการเนื้อหา' => base_url('admin/content/category/')
    );
    $data['link_add'] = base_url('admin/content/addcontent');
    $data['cat_id'] = $category_id;
    $data['lists'] = array();
    $lists = $this->model_content->getContentListByCat($category_id);
    foreach ($lists as $value) {
      $data['lists'][] = $value;
    }

    $category_info = $this->model_content->getCatList($category_id);
    $data['heading_title'] = $category_info->name;
    if ($this->input->server('REQUEST_METHOD') == 'GET') {
    }
    $data['pagination'] = '';
    $this->load->template('admin/content/content', $data);
  }

  public function content_cat($category_id = null)
  {
    $data = array();
    $data['heading_title'] = 'เนื้อหา';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'จัดการเนื้อหา' => base_url('admin/content/content_cat/')
    );
    $data['cat_id'] = $category_id;
    $filter['parent'] = $category_id;
    $filter['del']    = 0;
    $data['lists']    = $this->model_content->getCatLists($filter);
    $data['content_cat_lists'] = array();
    foreach ($data['lists'] as $value) {
      $filters['parent'] = $value->id;
      $lists_cat = $this->model_content->getCatLists($filters);
      $data['lists_cat'][$value->id]  = count($lists_cat);

      $lists_content = $this->model_content->getContentByCat($value->id);
      $data['lists_content'][$value->id] = count($lists_content);

      $data['content_cat_lists'][] = $this->model_content->getCatListById($value->id);
    }
    $this->load->template('admin/content/content_cat', $data);
  }

  public function edit($category_id, $id)
  {
    $data = array();
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');
    // $data['uploadFailed'] = $this->session->has_userdata('uploadFailed') ? $this->session->uploadFailed : '';
    $this->session->unset_userdata('uploadFailed');
    // $data['uploadSuccess'] = $this->session->has_userdata('uploadSuccess') ? $this->session->uploadSuccess : '';
    $this->session->unset_userdata('uploadSuccess');
    $data['action'] = base_url('admin/content/edit/' . $category_id . '/' . $id);
    $data['lists'] = $this->model_content->getContentByCatId($category_id, $id);
    $data['heading_title'] = 'แก้ไขรูปหน้าหลัก';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'แก้ไขรูปหน้าหลัก' => base_url('admin/content/edit/' . $category_id . '/' . $id)
    );
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      //upload image
      $config['upload_path'] = './upload/content/';
      $config['allowed_types'] = 'jpeg|jpg|png|gif';
      $config['max_size'] = 5000;
      $config['max_width'] = 0; //set 0 for free width
      $config['max_height'] = 0; //set 0 for free height
      $config['remove_spaces'] = true;
      $config['file_name'] =  '_' . $post['time_update'];
      // $config['encrypt_name'] = true;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('file_1')) {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
      } else {
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];

        $update = array(
          'picture1'        =>  $image,
          'picture_thumb'   =>  '',
          'time'            =>  time()
        );
        $edit_content = $this->model_content->editContent($id, $update);
        if ($edit_content) {
          $this->session->set_userdata('uploadSuccess', 'เปลี่ยนรูปภาพหน้าหลัก เสร็จสิ้น');
        } else {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
        }
        redirect('admin/content/category/');
      }
    }

    $this->load->template('admin/content/edit', $data);
  }

  public function edit_detail($id)
  {
    $data = array();
    $data['lists'] = $this->model_content->getContentList($id);
    $data['action'] = base_url('admin/content/edit_detail/' . $id);
    $data['heading_title']  = $data['lists']->name;
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      if ($_FILES['file_1']['size'] > 0) {
        //upload image
        $config['upload_path'] = './upload/content/';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|docx|doc';
        $config['max_size'] = 10000;
        $config['max_width'] = 0; //set 0 for free width
        $config['max_height'] = 0; //set 0 for free height
        $config['remove_spaces'] = true;
        $config['file_name'] =  '_' . $post['time_update'];
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_1')) {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
        }
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];
        $update = array(
          'picture1'        =>  isset($image) ? $image : '',
          'picture_thumb'   =>  '',
          'time_update'     =>  time()
        );
        $edit_content = $this->model_content->editContent($id, $update);
      }
      $update_language = array(
        'name'    =>  $post['detail_name'],
        'detail'  =>  $post['detail'],
      );
      $edit_language = $this->model_content->editLanguageDetailByRefId($id, $update_language);
      if ($edit_language) {
        $this->session->set_userdata('uploadSuccess', 'เปลี่ยนรูปภาพหน้าหลัก เสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
      }
      redirect('admin/content/category/');
    }

    $this->load->template('admin/content/edit_detail', $data);
  }

  public function edit_content_cat($id)
  {
    $data = array();
    $data['content_detail'] = $this->model_content->getCatListById($id);
    $data['heading_title']  = $data['content_detail']->name;
    $data['action'] = base_url('admin/content/edit_content_cat/' . $id);
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      if ($_FILES['file_1']['size'] > 0) {
        $config['upload_path'] = './upload/content/';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|docx|doc';
        $config['max_size'] = 10000;
        $config['max_width'] = 0; //set 0 for free width
        $config['max_height'] = 0; //set 0 for free height
        $config['remove_spaces'] = true;
        $config['file_name'] =  '_' . $post['time_update'];
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_1')) {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
        }
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];
        $update = array(
          'picture1'         =>  $image,
          'time_update'      =>  time()
        );
        $edit_content_cat = $this->model_content->editCat($id, $update);
      }
      $language_id = $post['language_detail_id'];
      $update_content = array(
        'name'   =>   $post['detail_name']
      );
      $edit_language = $this->model_content->editLanguageDetail($language_id, $update_content);
      if ($edit_language) {
        $this->session->set_userdata('uploadSuccess', 'แก้ไขข้อมูล content เสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
      }
      redirect('admin/content/category/');
    }
    $this->load->template('admin/content/content_cat_edit', $data);
  }
  public function addcontent($cat_id)
  {
    $data = array();
    $data['action'] = base_url('admin/content/addcontent/' . $cat_id);
    $data['heading_title']  = 'Content';
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      if ($_FILES['file_1']['size'] > 0) {
        //upload image
        $config['upload_path'] = './upload/content/';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|docx|doc';
        $config['max_size'] = 10000;
        $config['max_width'] = 0; //set 0 for free width
        $config['max_height'] = 0; //set 0 for free height
        $config['remove_spaces'] = true;
        $config['file_name'] =  '_' . $post['time_update'];
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_1')) {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
        }
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];
      }
      $cat_detail = $this->model_content->getSeqByCat($cat_id);
      $add_value = array(
        'cat'             =>  $cat_id,
        'picture1'        =>  isset($image) ? $image : '',
        'picture_thumb'   =>  '',
        'article'         =>  $post['article'],
        'del'             =>  0,
        'hide'            =>  0,
        'time'            =>  time(),
        'seq'             =>  $cat_detail[0]->maxz
      );
      $add_content = $this->model_content->addContent($add_value);
      $add_language_value = array(
        'language_id' =>  1,
        'ref_id'      =>  $add_content,
        'name'        =>  $post['detail_name'],
        'detail'      =>  $post['detail'],
        'type'        =>  1
      );
      $add_language = $this->model_content->addLanguageDetail($add_language_value);
      if ($add_content && $add_language) {
        $this->session->set_userdata('uploadSuccess', 'เพิ่มข้อมูล content เสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
      }
      redirect('admin/content/list/' . $cat_id);
    }

    $this->load->template('admin/content/add_content', $data);
  }

  public function add_content_cat($cat_id)
  {
    $data = array();
    $data['action'] = base_url('admin/content/add_content_cat/' . $cat_id);
    $data['heading_title']  = 'Content';
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      if ($_FILES['file_1']['size'] > 0) {
        $config['upload_path'] = './upload/content/';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|docx|doc';
        $config['max_size'] = 10000;
        $config['max_width'] = 0; //set 0 for free width
        $config['max_height'] = 0; //set 0 for free height
        $config['remove_spaces'] = true;
        $config['file_name'] =  '_' . $post['time_update'];
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_1')) {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
        }
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];
      }
      $add_content = array(
        'parent'    =>  $cat_id,
        'hide'      =>  '0',
        'del'       =>  '0',
        'picture1'  =>  isset($image) ? $image : '',
        'time'      =>  time()
      );
      $add_content_cat = $this->model_content->addCat($add_content);
      $add_language = array(
        'ref_id'        =>  $add_content_cat,
        'language_id'   =>  '1',
        'type'          =>  '0',
        'name'          =>   $post['detail_name']
      );
      $add_language_detail = $this->model_content->addLanguageDetail($add_language);
      if ($add_content_cat && $add_language_detail) {
        $this->session->set_userdata('uploadSuccess', 'เพิ่มข้อมูล content เสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล');
      }
      redirect('admin/content/category/');
    }
    $this->load->template('admin/content/add_content_cat', $data);
  }

  public function delContent_Picture($id)
  {
    if ($id > 0) {
      $update_content = array(
        'picture1'        =>  '',
        'picture_thumb'   =>  '',
        'time_update'     =>  time()
      );
      $edit_content = $this->model_content->editContent($id, $update_content);

      if ($edit_content) {
        $this->session->set_userdata('uploadSuccess', 'ลบข้อมูลเสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการลบข้อมูล');
      }
      redirect('admin/content/category/');
    }
  }
  public function delContent_detail($id)
  {
    if ($id > 0) {
      $update_detail = array(
        'del'  =>  '1',
        'time_update' =>  time()
      );
      $del_content  = $this->model_content->editContent($id, $update_detail);
      if ($del_content) {
        $this->session->set_userdata('uploadSuccess', 'ลบข้อมูลเสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการลบข้อมูล');
      }
      redirect('admin/content/category/');
    }
  }
  public function HideContent($id)
  {
    if ($id > 0) {
      $update = array(
        'hide'   =>   '1',
        'time_update' =>  time()
      );
      $hide_content = $this->model_content->editContent($id, $update);
      if ($hide_content) {
        $this->session->set_userdata('uploadSuccess', 'ซ่อนเนื้อหาเสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการซ่อนข้อมูล');
      }
      redirect('admin/content/category/');
    }
  }
  public function ShowContent($id)
  {
    if ($id > 0) {
      $content_detail = $this->model_content->getContentList($id);
      if ($content_detail->hide == 1) {
        $update = array(
          'hide'        =>  '0',
          'time_update' =>  time()
        );
        $show_content = $this->model_content->editContent($id, $update);
        if ($show_content) {
          $this->session->set_userdata('uploadSuccess', 'การตั้งค่าเสร็จสิ้น');
        } else {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการตั้งค่า');
        }
        redirect('admin/content/category/');
      }
    }
  }

  public function HideContentCat($id)
  {
    if ($id > 0) {
      $update = array(
        'hide'   =>   '1',
        'time_update' =>  time()
      );
      $hide_content = $this->model_content->editCat($id, $update);
      if ($hide_content) {
        $this->session->set_userdata('uploadSuccess', 'ซ่อนเนื้อหาเสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการซ่อนข้อมูล');
      }
      redirect('admin/content/category/');
    }
  }
  public function ShowContentCat($id)
  {
    if ($id > 0) {
      $content_detail = $this->model_content->getCatListById($id);
      if ($content_detail->hide == 1) {
        $update = array(
          'hide'        =>  '0',
          'time_update' =>  time()
        );
        $show_content = $this->model_content->editCat($id, $update);
        if ($show_content) {
          $this->session->set_userdata('uploadSuccess', 'การตั้งค่าเสร็จสิ้น');
        } else {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการตั้งค่า');
        }
        redirect('admin/content/category/');
      }
    }
  }
  public function delContentCat_detail($id)
  {
    if ($id > 0) {
      $update_detail = array(
        'del'  =>  '1',
        'time_update' =>  time()
      );
      $del_content  = $this->model_content->editCat($id, $update_detail);
      if ($del_content) {
        $this->session->set_userdata('uploadSuccess', 'ลบข้อมูลเสร็จสิ้น');
      } else {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการลบข้อมูล');
      }
      redirect('admin/content/category/');
    }
  }

  public function editSeqContent($id)
  {
    if ($id > 0) {
      $cat_detail = $this->model_content->getContentList($id);
      if ($this->input->server('REQUEST_METHOD') == 'GET') {
        $get = $this->input->get();
        $update = array(
          'seq' =>  $get['sort']
        );
        $this->model_content->editContent($id,$update);
      }
      redirect('admin/content/list/'.$cat_detail->cat);
    }
  }
  public function editSeqContentCat($id)
  {
    if ($id > 0) {
      $cat_detail = $this->model_content->getCatListById($id);
      if ($this->input->server('REQUEST_METHOD') == 'GET') {
        $get = $this->input->get();
        $update = array(
          'seq' =>  $get['sort']
        );
        $this->model_content->editCat($id,$update);
      }
      redirect('admin/content/content_cat/'.$cat_detail->parent);
    }
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require __DIR__ . '/vendor/autoload.php';


class Result extends CI_Controller
{

  public static $docpath = '';
    
  public function __construct()
  {
    parent::__construct();
    self::$docpath = $_SERVER['DOCUMENT_ROOT'] . '/mhd/';
    require self::$docpath.'assets/vendor/google-drive/autoload.php';
  }

  public function index()
  {
    // default path
    redirect('admin/result/list');
    exit();
  }

  public function list($folderid='', $foldername='') 
  {
    $data = array(); 
    $foldername = base64_decode(urldecode($foldername));
    $data['heading_title'] = 'จัดการไฟล์'.(!empty($folderid) ? ' '.$foldername : '');
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'จัดการไฟล์' => base_url('admin/result/list')
    );
    $data['isfolder'] = false;
    if (!empty($folderid)) {
      $data['breadcrumbs'][$foldername] = base_url('admin/result/list/' . $folderid . '/' .$foldername);
      $data['isfolder'] = true;
    }
    // $data['action'] = base_url('admin/result/lists/'.$page);


    $data['year_id'] = $this->model_setting->get('config_register_year_id');

    // get year
    $data['years'] = $this->model_year->getLists();

    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter);


    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : ''; $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : ''; $this->session->unset_userdata('error');

    if ($this->session->has_userdata('urlredirect')) {
      $data['link_redirect'] = $this->session->urlredirect;
      $credentials = json_decode(file_get_contents(self::$docpath . 'google/credentials.json'), true);
      $data['credentials'] = $credentials;
      $this->session->unset_userdata('urlredirect');
      $this->load->template('admin/result/permission', $data);
    } else {
      $data['link_clear'] = base_url('admin/result/clearToken');

      $code = $this->input->get('code');
      $client = $this->getClient($code);
  
      $data['results'] = $this->getResult($client, $folderid);
  
      $this->load->template('admin/result/index', $data);
    }
  }

  public function findTrial()
  {
    $year_id = $this->input->post('year_id');
    $program_id = $this->input->post('program_id');
    $data = array();
    $data = array();
    if ($year_id>0) {
      $filter = array(
        'year_id' => $year_id,
        'program_id' => $program_id
      );
      $data = $this->model_trial->getLists($filter);
    }
    
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
  }

  // ========================================

  public function getClient($code) 
  {
    $client = null;

    try {
      $credentials = json_decode(file_get_contents(self::$docpath . 'google/credentials.json'), true);

      $client = new Google_Client();
      $client->setApplicationName('Google Drive API PHP Quickstart');
      $client->setScopes('https://www.googleapis.com/auth/drive');
      $client->setAuthConfig(self::$docpath . 'google/credentials.json');
      $client->setAccessType('offline');
      $client->setPrompt('select_account consent');
      // $urlcallback = base_url('admin/result'); // Link Redirect in Google Drive API
      $client->setRedirectUri($credentials['redirect_uris']);

      $tokenPath = self::$docpath . 'google/token.json';
      if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
      }
      // If there is no previous token or it's expired.
      if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
          $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
          if (empty($code)) {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            $this->session->set_userdata('urlredirect', $authUrl);
            $this->session->set_userdata('error', 'Request authorization by google.');
            redirect('admin/result/list/');
            exit();  
          } else {
            $authCode = trim(($code));
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
          }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    } catch (Exception $e) {
      throw $e;
    }

    return $client;
  }

  public function clearToken()
  {
    $tokenPath = self::$docpath . 'google/token.json';
    unlink($tokenPath);
    redirect('admin/result/list');
  }

  public function getResult($client, $folderid = '') 
  {
    $data = array();
    try {
      $service = new Google_Service_Drive($client);
      $credentials = json_decode(file_get_contents(self::$docpath . 'google/credentials.json'), true);

      $folderid = urldecode($folderid);

      // Print the names and IDs for up to 10 files.
      $optParams = array(
        'pageSize' => 100,
        // 'q'        => "'".$credentials['folderId']."' in parents and mimeType = 'application/pdf'",
        // 'q' => "'".$credentials['folderId']."' in parents and  mimeType = 'application/vnd.google-apps.folder'",
        'fields'   => 'nextPageToken, files(id, name, mimeType)',
      );
      if (empty($folderid)) {
        $optParams['q'] = "'".$credentials['folderId']."' in parents and (mimeType = 'application/vnd.google-apps.folder' or mimeType = 'application/pdf')";
      } else {
        $optParams['q'] = "'".$folderid."' in parents and (mimeType = 'application/vnd.google-apps.folder' or mimeType = 'application/pdf')";
      }
  
      $results = $service->files->listFiles($optParams);
      // echo $nextPage = $service->nextPageToken;
      // exit();

      if (!empty($folderid)) {
        $data[] = array(
          'link' => base_url('admin/result/list'),
          'target' => '',
          'id' => '',
          'type' => 'application/vnd.google-apps.folder',
          'name' => '..',
        );
      }

  
      if (count($results->getFiles()) == 0) {
          // print "No files found.\n";
      } else {
        
          foreach ($results->getFiles() as $file) {
            $data[] = array(
              'link' => (!empty($folderid)) ? 'https://drive.google.com/file/d/'.$file->getId().'/view?usp=sharing' : base_url('admin/result/list/'.urlencode($file->getId()).'/'.urlencode(base64_encode($file->getName()))),
              'target' => (!empty($folderid)) ? '_blank' : '',
              'id'   => $file->getId(),
              'type' => $file->getMimeType(),
              'name' => $file->getName()
            );
              // echo '<a href="https://drive.google.com/file/d/'.$file->getId().'/view?usp=sharing" target="new">'.$file->getName().'</a><br>';
          }
      }
    } catch (Exception $e) {
      throw $e;
    }

    return $data;
  }
    

}
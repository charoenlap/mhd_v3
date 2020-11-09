<?php
class MY_Loader extends CI_Loader {
    public function Template($template_name, $vars = array(), $return = FALSE)
    {
        if (strpos($template_name, 'admin')!==false) {
            $this->view('admin/common/header', $vars);
            $this->view('admin/common/navbar', $vars);
            $this->view($template_name, $vars);
            $this->view('admin/common/footer', $vars);
        } else {
            if($return):
                $content = $this->view('common/header', $vars, $return);
                $content .= $this->view('common/navbar', $vars, $return);
                $content .= $this->view($template_name, $vars, $return);
                $content .= $this->view('common/footer', $vars, $return);
                return $content;
            else:
                $this->view('common/header', $vars);
                $this->view('common/navbar', $vars);
                $this->view($template_name, $vars);
                $this->view('common/footer', $vars);
            endif;
        }
    }
}
    ?>
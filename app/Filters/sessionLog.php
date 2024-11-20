<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class sessionLog implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (!session('usuario')=='rmr') {
            
            return redirect()->to(base_url('/public/index'));
            echo '<script type="text/javascript">alert</script>';
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
    
    }
}
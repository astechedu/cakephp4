<?php
declare(strict_types=1);

namespace App\Controller;
use App\Model\Entity\User;
class UsersController extends AppController
{     	

    public function initialize(): void
    {
     parent:: initialize();
    }

    public function index()
    {     
        
    }

    public function register()
    {
            
    }   
    
    public function save()
    {       
       pr($this->request->getData());
      
    }  
}


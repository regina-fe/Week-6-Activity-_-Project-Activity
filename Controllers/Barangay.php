<?php

namespace App\Controllers;

class Barangay extends BaseController
{
    public function dashboard()
    {
        $data =[
            'page_title' => 'Barangay Kaingen | Dashboard',
            'page_heading' => 'Dashboard',
        ];
        return view('Dashboard',$data);
    }

    public function residents_list()
    {
        $data =[
            'page_title' => 'Barangay Kaingen | Residence List',
            'page_heading' => 'Residence List',
        ];
        return view('Residents_list',$data);

    }
    
    public function certificates()
    {
        $data =[
            'page_title' => 'Barangay Kaingen | Certificates',
            'page_heading' => 'Certificates',
        ];
        return view('Certificates',$data);

    }

    public function services()
    {
        $data =[
            'page_title' => 'Barangay Kaingen | Services',
            'page_heading' => 'Services',
        ];
        return view('Services',$data);

    }

    public function mapping()
    {
        $data =[
            'page_title' => 'Barangay Kaingen | Mapping',
            'page_heading' => 'Mapping',
        ];
        return view('Mapping',$data);

    }



}

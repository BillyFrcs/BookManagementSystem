<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BookModel;

class Book extends BaseController
{
    public function __construct()
    {
        $this->Book = new BookModel();
    }
    
    public function Index()
    {
        $data['BookData'] = $this->Book->GetBook();

        // d($this->request->getVar('keyword')); // DEBUG

        return View('Book/Index', $data);
    }

    public function Add()
    {
        return View('Book/Add');
    }

    public function Save()
    {
        $bookName = $this->request->getVar('bookName');
        $bookAuthor = $this->request->getVar('bookAuthor');
        $bookISBN = $this->request->getVar('bookISBN');
        $dateOfPublishing = $this->request->getVar('dateOfPublishing');

        $data = [
            'Name' => $bookName,
            'Author' => $bookAuthor,
            'ISBN' => $bookISBN,
            'DateOfPublishing' => $dateOfPublishing
        ];

        $save = $this->Book->SaveBook($data);

        if ($save)
        {
            return redirect()->to('/Book');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function Edit($id)
    {
        $data['BookData'] = $this->Book->GetBook($id);
        
        return View('Book/Update', $data);
    }

    public function Update()
    {
        $bookID = $this->request->getVar('bookID');
        $bookName = $this->request->getVar('bookName');
        $bookAuthor = $this->request->getVar('bookAuthor');
        $bookISBN = $this->request->getVar('bookISBN');
        $dateOfPublishing = $this->request->getVar('dateOfPublishing');

        $data = [
            'ID' => $bookID,
            'Name' => $bookName,
            'Author' => $bookAuthor,
            'ISBN' => $bookISBN,
            'DateOfPublishing' => $dateOfPublishing
        ];

        $update = $this->Book->SaveBook($data);

        if ($update)
        {
            return redirect()->to('/Book');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function Delete($id)
    {
        $this->Book->DeleteBook($id);

        return redirect()->to('/Book');
    }
}

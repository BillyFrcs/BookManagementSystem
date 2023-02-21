<?php 

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{ 
    protected $table = "BookData";
    protected $primaryKey = 'ID';
    protected $allowedFields = ['Name', 'Author', 'ISBN', 'DateOfPublishing'];
    
    public function GetBook($id = true)
    {
        if ($id === true) 
        {
            return $this->findAll();
        } 
        else 
        {
            return $this->where([$this->primaryKey => $id])->first();
        }
    }

    public function SaveBook($data)
    {
        return $this->save($data);
    }

    public function DeleteBook($id)
    {
        $this->delete($id);
    }
}

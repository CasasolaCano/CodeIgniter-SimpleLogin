<?php  namespace App\Models;
    use CodeIgniter\Model;


    $db = \Config\Database::connect();

    
    
    class Usuarios extends Model {

        public function getUsuario($data) {

            $Usuario = $this->db->table('t_usuario');
            $Usuario->where($data);
            return $Usuario->get()->getResultArray();
        }
        
    }


?>
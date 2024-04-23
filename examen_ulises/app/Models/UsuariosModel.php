<?php namespace App\Models; 
    use CodeIgniter\Model;

    class UsuariosModel extends Model{

        protected $table = 'usuarios';
    protected $allowedFields = ['email','pass'];

        public function guardar($data){
            $db = \Config\Database::connect();
            $builder = $db->table('usuarios');

            if($builder->insert($data) && $db->affectedRows() > 0){
                return $this->db->insertId();
            }
            else{
                return false;
            }
        }

        public function info($correo){
            $query = $this->db->query("SELECT * FROM usuarios WHERE (email = '$correo')");
            $row = $query->getRow();

            if(isset($row)){
                return $row;
            }
            else{
                return false;
            }
        }
    }
?>
<?php namespace App\Models;
    use CodeIgniter\Model;
    class CrudModel extends Model {
        
        public function listarNombres(){
            $user = $this->db->query("SELECT * FROM users");
            return $user->getResult();
        }
        public function insertar($datos){
            $user = $this->db->table('users');
            $user->insert($datos);

            return $this->db->insertID();
        }
        public function obetnerNombre($data)
        {
            $user =$this->db->table('users');
            $user->where($data);
            return $user->get()->getResultArray();
        }

        public function actualizar($data,$id)
        {
            $user =$this->db->table('users');
            $user->set($data);
            $user->where('id',$id);
            return $user->update();
        }

        public function eliminar($data)
        {
            $user =$this->db->table('users');
            $user->where($data);
            return $user->delete();
        }
    }
<?php 
	class User extends CI_Model{
		function get_all_users()
		{
		 return $this->db->query("SELECT * FROM users")->result_array();
		}
		function get_user($email, $password)
		{
		 return $this->db->query("SELECT * FROM users WHERE email = ? and password = ?", array($email, $password))->row_array();
		}
		function add_user($user)
		{
		 $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,NOW(), NOW())";
		 $values = array($user['first_name'], $user['last_name'], $user['email'], $user['password']); 
		 return $this->db->query($query, $values);
		} 
		function delete_user_by_id($user_id)
		{
			return $this->db->query("DELETE FROM users WHERE id = ?", $user_id);	
		}
		function update_user($user)
		{
			$query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, created_at = NOW(), updated_at = NOW() WHERE id = ?";
			$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], $user['id']);
			return $this->db->query($query, $values);
		}
	}
 ?>
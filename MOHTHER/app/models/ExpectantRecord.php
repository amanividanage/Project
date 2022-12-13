<?php
class ExpectantRecord {

    private $db;

    public function __construct(){

        $this->db =new Database;
    }
   /* public function getExpectantRecords(){
        $this->db->query('SELECT nic, height, weight FROM expectant');
        $results =  $this->db->resultSet();
        return $results;
    }*/

      public function getExpectantRecords(){
        $this->db->query('SELECT registration.nic, mname, memail, mcontactno,registrationDate,expectedDateofDelivery
                         FROM expectant
                         INNER JOIN registration
                         ON registration.nic = expectant.nic 
                         
                         ');
        $results =  $this->db->resultSet();
        return $results;
    }

    public function getNewExpectantRecords(){
        $this->db->query('SELECT nic, mname
                         FROM registration
                
                         
                         ');
        $results =  $this->db->resultSet();
        return $results;
    }

    public function displayExpectantRecords($nic){
        $this->db->query("SELECT *
                         FROM registration
                         WHERE nic= :nic"
                         
                         );
                         $this->db->bindParam(':nic', $nic); 
        $results =  $this->db->single();
        return $results;
    }

    public function showExpectantMonthlyRecords($nic){
        $this->db->query('SELECT nic, reportNo,date, weight, triposha
                         FROM detailrecords_Expectant
                         WHERE nic= :nic'
              
                         
                         );
                         $this->db->bindParam(':nic', $nic); 
        $results =  $this->db->resultSet();
        return $results;
    }

    public function displayExpectantReports($nic, $reportNo){
        $this->db->query('SELECT *
                        FROM detailrecords_Expectant
                        WHERE nic= :nic AND reportNo = :reportNo'

        
                      );
                         $this->db->bindParam(':nic', $nic); 
                         $this->db->bindParam(':reportNo', $reportNo);
        $results =  $this->db->single();
        return $results;
    }

   


    public function filterExpectantRecords(){
        $this->db->query ("SELECT * 
        FROM expectant
        WHERE nic LIKE '%".$valueToSearch."%'");
        $results =  $this->db->resultSet();
        return $results;
    }

    public function addRecords($data){
        $this->db->query('INSERT INTO detailrecords_expectant (nic,reportNo,date,weight, vaccination,ironorForlate,vitaminC, calcium, antimarialDrugs, triposha) VALUES(:nic,:reportNo,:date,:weight,:vaccination,:ironorForlate,:vitaminC,:calcium,:antimarialDrugs,:triposha)');
        
        //bind values
        $this->db->bindParam(':nic', $data['nic']);
        $this->db->bindParam(':reportNo', $data['reportNo']);
        $this->db->bindParam(':date', $data['date']);
        $this->db->bindParam(':weight', $data['weight']);
        $this->db->bindParam(':vaccination', $data['vaccination']);
        $this->db->bindParam(':ironorForlate', $data['ironorForlate']);
        $this->db->bindParam(':vitaminC', $data['vitaminC']);
        $this->db->bindParam(':calcium', $data['calcium']);
        $this->db->bindParam(':antimarialDrugs', $data['antimarialDrugs']);
        $this->db->bindParam(':triposha', $data['triposha']);
      
        //execute for update/delete
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }


    
}
public function password_expectant($data){
    $this->db->query('INSERT INTO expectant (password) VALUES(:password)');
    
    //bind values
    $this->db->bindParam(':password', $data['password']);
   
    //execute for update/delete
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }



}


}
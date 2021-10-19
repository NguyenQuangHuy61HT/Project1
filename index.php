<?php
    class NhaVien {
  // Properties
  private $name;
  private $chucvu;
  private $email;
  private $Sdt;
  // Methods
  public function __construct($uname,$chv,$mail,$sdt)
  {
        $this->name=$uname;
        $this->chucvu=$chv;
        $this->email=$mail;
        $this->Sdt=$sdt;

  }
  public function set_name($name) {
    $this->name = $name;

  }
  public function get_name() {
    return $this->name ;
  }
  public function set_chucvu($chucvu)
  {
      $this->chucvu = $chucvu;
  }
 public function get_chucvu() {
    return $this->chucvu ;
  }
   public function set_email($email)
  {
      $this->email = $email;
  }
 public function get_email() {
    return  $this->email ;
  }
   public function set_sdd($Sdt)
  {
      $this->Sdt = $Sdt;
  }
 public function get_sdd() {
    return $this->Sdt ;
  }
}
$NV=new NhaVien('Nguyen Quang Huy','SinhVien','huy@gmail.com','0837329898');
echo "Name: " . $NV->get_name()."<br>";
echo "Chucvu: " . $NV->get_chucvu()."<br >";
echo "Email: " . $NV->get_email()."<br>";
echo   "SĐT:" . $NV  ->  get_sdd (). "<br>" ;


?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
XXNWMMMMMMMMMWMMMMMWMMMMMWWKKKkONWWWWWWWWWWMWWWWWWWWWWMMWMMMMMMMMMMMWx:,'lKWWWWWWWWWWMWMMMMMMMWNXKXX
KNWMMWWMMMMMMMMMMMMWWWWWWWWWX0OKWWWWWWWMWWMMWMWMMMMMMMMMMMMMWWMMMMMMWd:c'.'lkXWMWMMMMMMMMMMMMMMMWNXX
XWWWWWMMMMMMMWWWWWWWWWWWWMWWWNNWMMMMWMMMMMWMMMMMMMMMMMMMMMMMMWWMMMMMXlco:'...,codxxkkxxONMWMMMMMMMWW
NWWWWWMMMMWWWWWWWWWWWNNWWMWMMWWMMMMMMMMMMWWWMMMMMMMMMMMMMMMMMWNNWMMWxcodo:'.'........;xKWMWNNWMMMMMM
WWWWWWMMWWWWWWWWWWWMWXXMWMMMMMMMMMMMMMMMMWXNMMMMMMMMMMMMMMMMMMWNXWNxclddddd:,,'....,xNMMMMMWXXNWWNWM
WWWWWWMMWWWWWWMWMMMMW0KMMMMMMMMMMMMMMMMMMN0XWMMMMMMMMMMMMMMMMMMWKkocodddoooc;.....:KMMMMMMMMNK0KXXXX
WWWWWWWWWMMMMMMMMMMMKx0MMMMMMMMMMMMMMMMMMXxOWMMMMMMMMMMMMMMMMWKxl:clllllcclc;....,0MMMMMMMMMWNK00KXK
WWWMWMMMMMMMMMMMMMMNko0MMMMMMMMMMMMMMMMMMXxxXMMMMMMMMMMMMMMMNKxodolc::ccloool,...oWMMMMMMMMMMMN0000K
MMMMMMMMMMMMMMMMMMW0xdOWMMMMMMMMMMMMMMMMMXxdOXMMWNNXXXXXXXNNNNWWWWX0Oddkkolloc...kMMMMMMMMMMMMWX0000
MMMMMMMMMMMMMMMMMMXkOxxXMMMMMMMMMMMMMMMMMXkk0O0KKKKKKXXXXNNNNNWWWWNKXXOKWX0xoc,.'OMWMMMMMMMMMMMNKKK0
MMMMMMMMMMMMMMMMMNOOX0dOWMMMMMMMMMMMMMMMMNkON0xkKWMMMMMMMMMMMMMMMMWXKKO0NNWWXOo;,xNWMMMMMMMMMNKOxxxx
MMMMMMMMMMMMMMMMW0kKNXOxOKKXNMMMMMMMMMMMMWOONNXK0KKKXNWMMMMMMMMMMMMNK00O0KXNWWWX000OOO0KXXXKOOO00OkO
MMMMMMMMMMMMWWWMXkOKK00kdkKKNMMMMMMMMMMMMW0kXNNNNNNXK0KKXNWMMMMMMMMWXOOKK00KXXNWWWWWXKOOkdokKNWNKKNW
MMMMMMMMMMMMWNWWOk0KXNNX0kOXWMMMMMMMMMMMMMKkKWWWWWWWWNXK0000KXNNWWWWXKOONX0OO0KKKXNWWWWXOOXWWWKO0NWW
MMMMMMMMMMMMWNNKx0NNNNNNNKkxKNMMMMMMMMMMMMWO0WWWWWWWWWWWWNXKK00OOOOKKKKO0WWN0OxkOO0KKXKk0NWWN0x0WWNK
MMMMMMMMMMMMWXKkkXWNNNWWWWN0xOXWMMMMMMMMMMMXOXWWWWWWWWWWWWWWWWWNK0OkkxxddKMMMN0kxxkOkkxdkNWNNOxKWNNO
MMMMMMMMMMMMNKOx0NWWWWWNNWWNKkxkKWMMMMMMMMMWK0NWWWWWWWWWWWWWWWWWWWWWNX0OxkNMMMMWKkdodxkxdxOXNXkkXNN0
MMMMMMMMMMMMN0dxXWWWWWWKkOXXXK0xoxKNXNMMMMMMWKKWWWWWWWWWWWWWWWX0NWNWWN0KXOKMMMMMMWXOxoodxdodxO0kOKXX
MWWMMMMMMMMMXkokXKOOOxl:..',:ldkO0KK0O0XWMMMMNKKWWWWWWNNXXXNWXl:x000kclKWKONMMMMMMMWN0xdoodkxdoddxOK
WNWMMMMMMMMMKdoOXXo'.  ..     .cdOXXK0kxk0KXWMNKXWWWWWXK0K0kl'   ... .l0XXOKMMMMMWNNNXX0kdllxOkxdooo
XXWMMMMMMMMM0ook0x;..,l:.......:OKXNWNXKOO00KKXXKKXNWWNN0d:,;cloooollcd0XXOOWN0O0KKK00K0OOkxOKKKKK0O
KXWMMMMMMMMWOcokxc..:xOd;''cxd;.cXWWWWWWNXNWWWNNNXKNWWWXkxOXNWNNNNNNNNNNNXkxOxOXWWWWWWWNNNNNNNNNNNXX
KNMMMMMMMMMNkco0N0;'o0N0l',OWWk..kWWWWWWWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNKxdkkO000OOOOOOkkkOOO000KKK
KNMMMMMMMMWXxclOXNOlxXWx...ck0d,,kWWWWWWWNNWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNKxdKWXK0Okkkkkkkkxxxxxxxxxx
KNMMMMMMMMWKxood0XNXKNWXc.',:clloKWWWWWWWNNWWWWWWWWWWWWWWWWWNNNNNNNNNNNNN0ol0MMMMMMMMMMWWWXK00000000
XWMMMMMMMMXOxdkxdOXNNNWWXx::clld0WWWWWWWWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNkccOMMMMMMMMMMMMMWX00000000
XWMMMMMMMWKOdoxkxdkXNNNNNNKOOO0XNWWWWWWWWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNN0odx0MMMMMMMMMMMMMWXK0000000
XWMMMMMMMNKOxdddxxoxXNNNNNNNNNNNNWWWWWWWWWWWWWWWWWWNXK00NWWWNNNNNNNNNNNKddOx0MMMMMMMMMMMMMNKK0000000
NMMMMMMMWXKOkOOxdddoxXNNNNNNNNNNNWWWWWWWWWWWWWWWWX0Oxkk0NWNNNNNNNNNNNN0ddOOkXMMMMMMMMMMMMWXK00000000
NMMMMMMMNXKOOO00OdoolkXNNNNNNNNNWWWWWWWNXXXNNNNXKOOO0KNNWNNNNNNNNNNNXOdxO0kONMMMMMMMMMMMMNK0O0K00000
NMMWWMMWWX0OO00000kxolkXNNNNNNNNWWWWWWWNXXXXXNNXNNWWWNNNNNNNNNNNNNN0xxO00OkKMMMMMMMMMMMMNXKOO0000000
NMWXWMWWWX00000000O00kdxKNNNNNNNWWWWWWWWWWWWNNNNNWWNNNNNNNNNNNNNX0xxk000Ok0WMMMMMMMMMMMWXK0O0KKK0000
WWXXWMWWNK00O00000OO00Oxdx0XNNNNNNWWNNWWWWNNNWNNNNNNNNNNNNNNNNKOxxk0000OkONWWMMMMMMMMMWXK0OOK0KKKKKK
WNKXWMMMN000O00000OOO000OkxkO0XNNNNNNNNNNNNNNNNNNNNNNNNNNNNX0kolx000O00kONWNWMMMMMMMMWXK0OOKKKKKKKKK
NK0XWMMWX000000000OOOOO0000OOkkOO00KXNNNNNNNNNWNNNNXKK00OOxl:llcoxdxxxk0NXXWMMMMMMMWNXK0xk0KKKKKKKKK
XK0XWMMNK000000O00OkkOOO0O00000OOkxkkkkkO00kxollc:;;,''.............:x0KKXWMMMMMMMWNKKOddOKKKKKKKKKK
K00XWMWXK000KKK0000kxkOOO000000O000Oxl,..''.......................;cdxkKWMMMMMMMWNXK0x;'lO000KKKKKKK
000KWMWX000KNNNNXK0OkkkxkOO000Oxoc;,.............................',',dXMMMMMMMWWXK0x:. .o000KKKKKKKK
000KNMWK000KNNNNWNX0OkOOxdddo:,.................................  .:OWMMMMMMWWXKOd,.   'k0O0KKKKKKKK
O00KNMNKKKKKKXNNNNXKKKXNX0o'. ...................................;xXWMMMMMWNX0xc.     .lOO0KKKKKKKKK
O00KXWNKXNNNXXKKXXXNNNNNKo.   ................................'ckXWMMMMWNXOdc'.       ;kO0KKKKKKKKKK
O0K0KWNKKXNNNXXXKKXXXKKKk:.    ..........................,:ldOXWMMWWXKkdc,.          'dO0KKKKKKKKKKK
OO0KKXXK00KKKKKXXXXNXX00OOx:.            ...............',;clodddol:,...            'ok0KKKKKKKKKKKK
xxkOOOOOOOOkkkkkOkxxkOOkkkkkd:.        ...................................         'ldkOOOOOOOOOOOOO
''''''''''''''''..  ....''''''...        ,l'.:..;,..     ':..:,                   ...'''''''''''''''
................          .......;:,.,;. ,c.lX:'0x'..,;,';kOOk,.;;;.             ...................
.................               lKOO0k0k.c0,cW0ONx''oOdxO;,0O,ckdkKc           .....................
..................             .xO,d0,oX:oX;lNdlXd.;Od.,0l.kx,kx.'Od         .......................
...................            .ld.cx''xkko.:k,.dl..;ddxo..oo.,ddxo'       .........................
....................            .. ..  ...  ... ..   ...   ..   ..       ...........................
*/

class Daftar_m extends CI_Model
{
  var $table = 'tb_daftar';
  var $table1 = 'tb_periksa';
  var $table2 = 'tbl_users';
  var $column_order =  array('id', 'kode_pasien', 'prefix', 'nama_pasien', 'nama_kk', 'no_kk', 'alamat', 'usia');
  var $order = array('id', 'kode_pasien', 'prefix', 'nama_pasien', 'nama_kk', 'no_kk', 'alamat', 'usia');

  private function _get_data_query()
  {
    $this->db->from($this->table);
    if (isset($_POST['search']['value'])) {
      $this->db->like('kode_pasien', $_POST['search']['value']);
      $this->db->or_like('prefix', $_POST['search']['value']);
      $this->db->or_like('nama_pasien', $_POST['search']['value']);
      $this->db->or_like('nama_kk', $_POST['search']['value']);
      $this->db->or_like('no_kk', $_POST['search']['value']);
      $this->db->or_like('alamat', $_POST['search']['value']);
      $this->db->or_like('usia', $_POST['search']['value']);
    }
    if (isset($_POST['order'])) {
      $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else {
      $this->db->order_by('id', 'DESC');
    }
  }


  public function getDataPasien()
  {

    $this->_get_data_query();
    if ($_POST['length'] !== -1) {
      $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
  }

  public function count_filtered_data()
  {
    $this->_get_data_query();
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all_data()
  {
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }

  public function tambahData($data)
  {
    $this->db->insert('tb_daftar', $data);
    return $this->db->affected_rows();
  }

  public function getdataById($id)
  {
    return $this->db->get_where($this->table, ['id' => $id])->row();
  }

  public function ubahData($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }

  public function hapusData($id)
  {
    $this->db->delete($this->table, ['id' => $id]);
    $this->db->query('ALTER TABLE tb_daftar DROP id');
    $this->db->query('ALTER TABLE tb_daftar ADD id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST');
    return $this->db->affected_rows();
  }

  //fungsi tombol periksa
  public function periksa($where, $data)
  {
    $this->db->insert($this->table1, $data, $where);
    return $this->db->affected_rows();
  }

  //fungsi cek session
  function logged_id()
  {
    return $this->session->userdata('user_id');
  }

  //fungsi check login
  function check_login($table2, $field1, $field2)
  {
    $this->db->select('*');
    $this->db->from($table2);
    $this->db->where($field1);
    $this->db->where($field2);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
      return FALSE;
    } else {
      return $query->result();
    }
  }


function testData($table)
  {
    return $this->db->query('SELECT id FROM tb_daftar WHERE id = (SELECT MAX(id) FROM tb_daftar) LIMIT 1');
  }


  //fungsi ambil data pasien
  function ambildata1($table1)
  {
    return $this->db->get($table1);
  } //end ambil data pasien

  //fungsi selesai pasien
  function selesai($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  } //end selesai pasien
}

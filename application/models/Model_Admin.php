<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Admin extends CI_Model
{

    public function cekKDSikap($kelas, $kompetensi)
    {
        $data = $this->db->get_where('kd_sikap', ['kompetensi' => $kompetensi, 'kelas' => $kelas])->result_array();
        if ($data) {
            return 1;
        } else {
            return 0;
        }
    }
    public function GetBanyakSiswaGroupByKelasWhereKelas($kelas)
    {
        $no = 1;
        $kls="";
        if($kelas==1){$kls="I";}
        else if($kelas==2){$kls="II";}
        else if($kelas==3){$kls="III";}
        else if($kelas==4){$kls="IV";}
        else if($kelas==5){$kls="V";}
        else if($kelas==6){$kls="VI";}
        
        $hasil = $this->db->query("SELECT COUNT(*) AS jumlah FROM siswa JOIN kelas on kelas.id = siswa.kelas WHERE siswa.kelas = $kelas GROUP BY kelas.kelas")->result_array();
        if($hasil==null){
            $hasil[0]['jumlah']="0";
            // var_dump($hasil);
        }
        return $hasil;
    }
    public function GetBanyakSiswaGroupByKelas()
    {
        $no = 1;
        $romawi="I";
        for ($i = $no; $i <= 6; $i++) {
            if($i<=3){
                $hasil[$i] = $this->db->query("SELECT COUNT(*) AS jumlah FROM siswa JOIN kelas on kelas.id = siswa.kelas WHERE kelas.kelas = '$romawi' GROUP BY kelas.kelas")->result_array();
                $romawi=$romawi."I";
            }else if($i<=4){
                $romawi="I";
                $hasil[$i] = $this->db->query("SELECT COUNT(*) AS jumlah FROM siswa JOIN kelas on kelas.id = siswa.kelas WHERE kelas.kelas = '$romawi.V' GROUP BY kelas.id")->result_array();
                $romawi="";
            }else if($i<=6){                    
                $hasil[$i] = $this->db->query("SELECT COUNT(*) AS jumlah FROM siswa JOIN kelas on kelas.id = siswa.kelas WHERE kelas.kelas = 'V.$romawi' GROUP BY kelas.id")->result_array();
                $romawi="I";
            }
            
            if($hasil[$i]==null){
                $hasil[$i][0]['jumlah']="0";
                // var_dump($hasil);
            }
                // $data[$i] = implode($hasil);
        }
        return $hasil;
    }

    public function getWarnaByNumber($no)
    {
        if ($no == 1) {
            return "danger";
        } elseif ($no == 2) {
            return "success";
        } elseif ($no == 3) {
            return "primary";
        } elseif ($no == 4) {
            return "secondary";
        } elseif ($no == 5) {
            return "warning";
        } elseif ($no == 6) {
            return "info";
        } elseif ($no == 7) {
            return "secondary";
        } else {
            return "light";
        }
    }
}

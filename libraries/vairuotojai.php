<?php


class vairuotojai {

    private $vairuotojai_lentele = '';
    private $sutartys_lentele = '';
    private $dokumentai_lentele = '';
    private $sunkvezimio_vairuotojai_lentele = '';

    public function __construct() {
        $this->vairuotojai_lentele = 'vairuotojai';
        $this->sutartys_lentele = 'sutartys';
        $this->dokumentai_lentele = 'dokumentai';
        $this->sunkvezimio_vairuotojai_lentele = 'sunkvezimio_vairuotojai';
    }

    public function getVairuotoja($id) {
        $query = " SELECT *
                    FROM {$this->vairuotojai_lentele}
                    WHERE `asmens_kodas`='{$id}'";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getVairuotojoSarasa($limit = null, $offset = null) {
        $limitOffsetString = "";
        if(isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if(isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = " SELECT *
                    FROM `{$this->vairuotojai_lentele}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getVairuotojoSarasoKieki() {
        $query = " SELECT COUNT(`asmens_kodas`) as `kiekis`
                    FROM `{$this->vairuotojai_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function getSunkvezimioVairuotoja($vairuotojoId) {
        $query = "  SELECT *
					FROM `{$this->sunkvezimio_vairuotojai_lentele}`
					WHERE `fk_vairuotojo_asmens_kodas`='{$vairuotojoId}'";
        $data = mysql::select($query);

        return $data;
    }

    public function insertSunkvezimioVairuotoja($data) {
        if(isset($data['numeriai']) && sizeof($data['numeriai']) > 0) {
            foreach($data['numeriai'] as $key=>$val) {
                if($data['neaktyvus'] == array() || $data['neaktyvus'][$key] == 0) {
                    $query = "  INSERT INTO `{$this->sunkvezimio_vairuotojai_lentele}`
											(
												`fk_vairuotojo_asmens_kodas`,
												`nuo_data`,
												`fk_sunkvezimio_numeriai`
											)
											VALUES
											(
												'{$data['asmens_kodas']}',
												'{$data['datos'][$key]}',
												'{$val}'
											)";
                    mysql::query($query);
                }
            }
        }
    }

    public function deleteSunkvezimioVairuotoja($id, $clause = ""){
        $query = "  DELETE FROM `{$this->sunkvezimio_vairuotojai_lentele}`
					WHERE `fk_vairuotojo_asmens_kodas`='{$id}'" . $clause;
        mysql::query($query);
    }

    public function deleteVairuotoja($id) {
        $query = "    DELETE FROM `{$this->vairuotojai_lentele}` 
                      WHERE asmens_kodas = '{$id}'";
        return mysql::query($query);
    }

    public function updateVairuotoja($data) {
        $query = " UPDATE {$this->vairuotojai_lentele}
                    SET `vardas`='{$data['vardas']}',
                        `pavarde`='{$data['pavarde']}',
                        `teisiu_pabaigos_data`='{$data['teisiu_pabaigos_data']}',
                        `gimimo_data`='{$data['gimimo_data']}',
                        `sutarties_data`='{$data['sutarties_data']}',
                        `telefono_numeris`='{$data['telefono_numeris']}'
                    WHERE `asmens_kodas`='{$data['asmens_kodas']}'";
        mysql::query($query);
    }

    public function insertVairuotoja($data) {
        $query = " INSERT INTO {$this->vairuotojai_lentele}
                                (
                                    `vardas`,
                                    `pavarde`,
                                    `asmens_kodas`,
                                    `teisiu_pabaigos_data`,
                                    `gimimo_data`,
                                    `sutarties_data`,
                                    `telefono_numeris`
                                )
                                VALUES
                                (
                                    '{$data['vardas']}',
                                    '{$data['pavarde']}',
                                    '{$data['asmens_kodas']}',
                                    '{$data['teisiu_pabaigos_data']}',
                                    '{$data['gimimo_data']}',
                                    '{$data['sutarties_data']}',
                                    '{$data['telefono_numeris']}'
                                )";
        mysql::query($query);

        return mysql::getLastInsertedId();

    }
}
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
                    FROM `{$this->vairuotojai_lentele}`
                    WHERE `asmens_kodas`=`{$id}`";
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

    public function deleteVairuotoja($id) {
        $query = "  DELETE FROM `{$this->vairuotojai_lentele}`
					WHERE `asmens_kodas`='{$id}'";
        mysql::query($query);
    }

    public function updateVairuotoja($data) {
        $query = " UPDATE `{$this->vairuotojai_lentele}`
                    SET `vardas`={$data['vardas']},
                        `pavarde`={$data['pavarde']},
                        `teisiu_pabaigos_data`={$data['teisiu_pabaigos_data']},
                        `gimimo_data`={$data['gimimo_data']},
                        `sutarties_data`={$data['sutarties_data']},
                        `telefono_numeris`={$data['telefono_numeris']}
                    WHERE `asmens_kodas`={$data['asmens_kodas']},";
        mysql::query($query);
    }

    public function insertVairuotoja($data) {
        $query = " INSERT INTO `{$this->vairuotojai_lentele}`
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
                                    '{$data['tesius_pabaigos_data']}',
                                    '{$data['gimimo_data']}',
                                    '{$data['sutarties_data']}',
                                    '{$data['telefono_numeris']}'
                                )";
        mysql::query($query);
    }

    public function getContractCountOfVairuotojas($id) {
        $query = "  SELECT COUNT(`{$this->sutartys_lentele}`.`numeris`) AS `kiekis`
					FROM `{$this->vairuotojai_lentele}`
						INNER JOIN `{$this->sutartys_lentele}`
							ON `{$this->vairuotojai_lentele}`.`asmens_kodas`=`{$this->sutartys_lentele}`.`fk_vairuotojo_asmens_kodas`
					WHERE `{$this->vairuotojai_lentele}`.`asmens_kodas`='{$id}'";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

}
<?php


class sutartys {

    private $vairuotojai_lentele = '';
    private $sutartys_lentele = '';
    private $dokumentai_lentele = '';
    private $saskaitos_lentele = '';
    private $imones_lentele = '';

    public function __construct() {
        $this->vairuotojai_lentele = 'vairuotojai';
        $this->sutartys_lentele = 'sutartys';
        $this->dokumentai_lentele = 'dokumentai';
        $this->saskaitos_lentele = 'saskaitos';
        $this->imones_lentele = 'imones';
    }

    public function getSutarty($id) {
        $query = " SELECT *
                    FROM `{$this->sutartys_lentele}`
                    WHERE `numeris`=`{$id}`";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getSutarciuSarasa($limit = null, $offset = null) {
        $limitOffsetString = "";
        if(isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if(isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = " SELECT *
                    FROM `{$this->sutartys_lentele}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getSutarciuSarasoKieki() {
        $query = " SELECT COUNT(`numeris`) as `kiekis`
                    FROM `{$this->sutartys_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function deleteSutarty($id) {
        $query = "  DELETE FROM `{$this->sutartys_lentele}`
					WHERE `numeris`='{$id}'";
        return mysql::query($query);
    }

    public function updateSutarty($data) {
        $query = " UPDATE `{$this->sutartys_lentele}`
                    SET `kaina`={$data['kaina']},
                        `referencinis_numeris`={$data['referencinis_numeris']},
                        `fk_imones_kodas`={$data['fk_imones_kodas']},
                        `fk_vairuotojo_asmens_kodas`={$data['fk_vairuotojo_asmens_kodas']}
                    WHERE `numeris`={$data['numeris']}";
        mysql::query($query);
    }

    public function insertSutarty($data) {
        $query = " INSERT INTO `{$this->sutartys_lentele}`
                                (
                                    `numeris`,
                                    `kaina`,
                                    `referencinis_numeris`,
                                    `fk_imones_kodas`,
                                    `fk_vairuotojo_asmens_kodas`,
                                )
                                VALUES
                                (
                                    '{$data['numeris']}',
                                    '{$data['kaina']}',
                                    '{$data['referencinis_numeris']}',
                                    '{$data['fk_imones_kodas']}',
                                    '{$data['fk_vairuotojo_asmens_kodas']}'
                                )";
        mysql::query($query);
    }
}
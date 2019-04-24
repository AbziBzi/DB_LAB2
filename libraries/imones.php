<?php


class imones
{
    private $kroviniai_lentele = '';
    private $dokumentai_lentele = '';
    private $sutartys_lentele = '';
    private $mokejimai_lentele = '';
    private $imones_lentele = '';

    public function __construct()
    {
        $this->mokejimai_lentele = 'mokejimai';
        $this->kroviniai_lentele = 'kroviniai';
        $this->sutartys_lentele = 'sutartys';
        $this->dokumentai_lentele = 'dokumentai';
        $this->imones_lentele = 'imones';
    }

    public function getImone($id){
        $query = "  SELECT *
                    FROM `{$this->imones_lentele}`
                    WHERE `imones_kodas`=`{$id}`";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getImoniuSarasa($limit = null, $offset = null) {
        $limitOffsetString = '';
        if(isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if(isset($offset)){
            $limitOffsetString .= " OFFSET {$offset}";
        }
        $query = "  SELECT *
                    FROM `{$this->imones_lentele}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getImoniuSarasoKieki() {
        $query = "  SELECT COUNT(`imones_kodas`) as `kiekis`
                    FROM `{$this->imones_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function deleteImone($id) {
        $query = "    DELETE FROM `{$this->imones_lentele}` 
                      WHERE imones_kodas = '{$id}'";
        return mysql::query($query);
    }

    public function updateImone($data) {
        $query = "  UPDATE `{$this->imones_lentele}`
                    SET `pavadinimas`={$data['pavadinimas']},
                        `kontakto_vardas`={$data['kontakto_vardas']},
                        `kontakto_pavarde`={$data['kontakto_pavarde']},
                        `isimokejimas`={$data['issimokejimas']}
                    WHERE `imones_kodas`={$data['imones_kodas']}";
        mysql::query($query);
    }

    public function insertImone($data) {
        $query = "  INSERT INTO `{$this->imones_lentele}`
                                  (
                                    `pavadinimas`,
                                    `kontakto_vardas`,
                                    `kontakto_pavarde`,
                                    `issimokejimas`,
                                    `imones_kodas`
                                  )
                                  VALUES
                                  (
                                    '{$data['pavadinimas']}',
                                    '{$data['kontakto_vardas']}',
                                    '{$data['kontakto_pavarde']}',
                                    '{$data['issimokejimas']}',
                                    '{$data['imoines_kodas']}'
                                  )";
        mysql::query($query);
    }
}
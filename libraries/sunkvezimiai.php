<?php


class sunkvezimiai {

    private $sunkvezimio_vairuotojai_lentele = '';
    private $sunkvezimio_iranga_lentele = '';
    private $kroviniai_lentele = '';
    private $sunkvezimiai_lentele = '';

    public function __construct() {
        $this->sunkvezimio_vairuotojai_lentele = 'sunkvezimio_vairuotojai';
        $this->kroviniai_lentele = 'kroviniai';
        $this->sunkvezimio_iranga_lentele = 'sunkvezimio_iranga';
        $this->sunkvezimiai_lentele = 'sunkvezimiai';
    }

    public function getSunkvezimiai($id) {
        $query = " SELECT * 
                    FROM `{$this->sunkvezimiai_lentele}`
                    WHERE 'numeriai'=`{$id}`";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getSunkvezimioSarasa($limit = null, $offset = null){
        $limitOffsetString = "";
        if(isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if(isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = " SELECT *
                    FROM `{$this->sunkvezimiai_lentele}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getSunkvezimioSarasoKieki() {
        $query = " SELECT COUNT(`numeriai`) as `kiekis`
                    FROM `{$this->sunkvezimiai_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function deleteSunkvezimi($id) {
        $query = "  DELETE FROM `{$this->sunkvezimiai_lentele}`
                    WHERE `numeriai`=`{$id}`";
        return mysql::query($query);
    }

    public function updateSunkvezimi($data) {
        $query = "  UPDATE `{$this->sunkvezimiai_lentele}`
                    SET `marke`={$data['marke']},
                        `modelis`={$data['modelis']},
                        `pagaminimo_data`={$data['pagaminimo_data']},
                        `registravimo_data`={$data['registravimo_data']},
                        `rida`={$data['rida']}
                    WHERE `numeriai`={$data['numeriai']}";
        mysql::query($query);
    }

    public function insertSunkvezimi($data){
        $query = "  INSERT INTO `{$this->sunkvezimiai_lentele}`
                                (
                                    `marke`,
                                    `modeliai`,
                                    `numeriai`,
                                    `pagaminimo_data`,
                                    `registravimo_data`,
                                    `rida`
                                )
                                VALUES 
                                (
                                    '{$data['marke']}',
                                    '{$data['modeliai']}',
                                    '{$data['numeriai']}',
                                    '{$data['pagaminimo_data']}',
                                    '{$data['registravimo_data']}',
                                    '{$data['rida']}',
                                )";
        mysql::query($query);
    }
}
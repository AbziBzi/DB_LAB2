<?php


class iranga
{
    private $iranga_lentele = '';
    private $sunkvezimiai_lentele = '';

    public function __construct(){
        $this->sunkvezimiai_lentele = 'sunkvezimiai';
        $this->iranga_lentele = 'sunkvezimio_iranga';
    }

    public function getIranga($id){
        $query = "  SELECT *
                    FROM `{$this->iranga_lentele}`
                    WHERE `id`='{$id}'";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getIrangosSarasa($limit = null, $offset = null){
        $limitOffsetString = "";
        if(isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if(isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = "  SELECT *
                    FROM `{$this->iranga_lentele}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getIrangosSarasoKieki() {
        $query = " SELECT COUNT(`id`) as `kiekis`
                    FROM `{$this->iranga_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function deleteIranga($id) {
        $query = "  DELETE FROM `{$this->iranga_lentele}`
					WHERE `id`='{$id}'";
        return mysql::query($query);
    }

    public function updateIranga($data) {
        $query = "  UPDATE  {$this->iranga_lentele}
                    SET     `pavadinimas`='{$data['pavadinimas']}',
                            `salis`='{$data['salis']}',
                            `pinigu_kiekis`='{$data['pinigu_kiekis']}',
                            `fk_sunkvezimio_numeriai`='{$data['fk_sunkvezimio_numeriai']}'
                    WHERE   `id`='{$data['id']}'";
        mysql::query($query);
    }

    public function insertIranga($data) {
        $query = " INSERT INTO `{$this->iranga_lentele}`
                                (
                                    `pavadinimas`,
                                    `salis`,
                                    `pinigu_kiekis`,
                                    `fk_sunkvezimio_numeriai`
                                )
                                VALUES
                                (
                                    '{$data['pavadinimas']}',
                                    '{$data['salis']}',
                                    '{$data['pinigu_kiekis']}',
                                    '{$data['fk_sunkvezimio_numeriai']}'
                                )";
        mysql::query($query);
    }
}
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
                    FROM `{$this->iranga_lentele}`
                    ORDER BY `sunkvezimio_iranga`.`pinigu_kiekis` DESC" . $limitOffsetString;
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

    public function getIsrinktaIranga($priceFrom, $priceTo) {
        $whereClauseString = "";
        if(!empty($priceFrom)) {
            $whereClauseString .= " WHERE `{$this->iranga_lentele}`.`pinigu_kiekis`>='{$priceFrom}'";
            if(!empty($priceTo)) {
                $whereClauseString .= " AND `{$this->iranga_lentele}`.`pinigu_kiekis`<='{$priceTo}'";
            }
        } else {
            if(!empty($priceTo)) {
                $whereClauseString .= " WHERE `{$this->iranga_lentele}`.`pinigu_kiekis`<='{$priceTo}'";
            }
        }

        $query = "  SELECT `{$this->iranga_lentele}`.`pavadinimas`,
						   `{$this->iranga_lentele}`.`salis`,
						   `{$this->iranga_lentele}`.`id`,
						   `{$this->sunkvezimiai_lentele}`.`numeriai` as `sunkvezimio_numeriai`,
						   `{$this->iranga_lentele}`.`pinigu_kiekis`
					FROM `{$this->sunkvezimiai_lentele}`
						INNER JOIN `{$this->iranga_lentele}`
							ON `{$this->iranga_lentele}`.`fk_sunkvezimio_numeriai`=`{$this->sunkvezimiai_lentele}`.`numeriai`
					{$whereClauseString} 
					GROUP BY `id` ORDER BY `numeriai`,`pinigu_kiekis` DESC";
        $data = mysql::select($query);

        return $data;
    }


    public function getPiniguKiekiIrangos($priceFrom, $priceTo) {
        $whereClauseString = "";
        if(!empty($priceFrom)) {
            $whereClauseString .= " WHERE `{$this->iranga_lentele}`.`pinigu_kiekis`>='{$priceFrom}'";
            if(!empty($priceTo)) {
                $whereClauseString .= " AND `{$this->iranga_lentele}`.`pinigu_kiekis`<='{$priceTo}'";
            }
        } else {
            if(!empty($priceTo)) {
                $whereClauseString .= " WHERE `{$this->iranga_lentele}`.`pinigu_kiekis`<='{$priceTo}'";
            }
        }

        $query = "  SELECT ROUND(sum(`{$this->iranga_lentele}`.`pinigu_kiekis`), 1 ) AS `suma`
					FROM `{$this->iranga_lentele}`
					{$whereClauseString}";
        $data = mysql::select($query);

        return $data;
    }
}
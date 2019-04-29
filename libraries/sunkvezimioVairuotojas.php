<?php


class sunkvezimioVairuotojas {

    private $vairuotojai_lentele = '';
    private $sunkvezimio_vairuotojai_lentele = '';
    private $sunkvezimio_lentele = '';

    public function __construct() {
        $this->vairuotojai_lentele = 'vairuotojai';
        $this->sunkvezimio_vairuotojai_lentele = 'sunkvezimio_vairuotojai';
        $this->sunkvezimio_lentele = "sunkvezimiai";
    }

    public function getVairuotoja($id) {
        $query = " SELECT *
                    FROM {$this->sunkvezimio_vairuotojai_lentele}
                    WHERE `id_sunkvezimio_vairuotojas`='{$id}'";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getVairuotojoSarasa($limit = null, $offset = null) {
        $query = "  SELECT `{$this->sunkvezimio_vairuotojai_lentele}`.`id_sunkvezimio_vairuotojas`,
						   `{$this->sunkvezimio_vairuotojai_lentele}`.`nuo_data`,
						   `{$this->sunkvezimio_vairuotojai_lentele}`.`iki_data`,
						   `{$this->vairuotojai_lentele}`.`vardas` AS `vairuotojo_vardas`,
						   `{$this->vairuotojai_lentele}`.`pavarde` AS `vairuotojo_pavarde`,					   
						   `{$this->sunkvezimio_lentele}`.`numeriai` AS `sunkvezimio_numeriai`
					FROM `{$this->sunkvezimio_vairuotojai_lentele}`
						LEFT JOIN `{$this->vairuotojai_lentele}`
							ON `{$this->sunkvezimio_vairuotojai_lentele}`.`fk_vairuotojo_asmens_kodas`=`{$this->vairuotojai_lentele}`.`asmens_kodas`
						LEFT JOIN `{$this->sunkvezimio_lentele}`
							ON `{$this->sunkvezimio_vairuotojai_lentele}`.`fk_sunkvezimio_numeriai`=`{$this->sunkvezimio_lentele}`.`numeriai` LIMIT {$limit} OFFSET {$offset}";
        $data = mysql::select($query);
        return $data;
    }

    public function getVairuotojoSarasoKieki() {
        $query = " SELECT COUNT(`id_sunkvezimio_vairuotojas`) as `kiekis`
                    FROM `{$this->sunkvezimio_vairuotojai_lentele}`";
        $data = mysql::select($query);

        return $data[0]['kiekis'];
    }

    public function deleteVairuotoja($id) {
        $query = "    DELETE FROM `{$this->sunkvezimio_vairuotojai_lentele}` 
                      WHERE id_sunkvezimio_vairuotojas = '{$id}'";
        return mysql::query($query);
    }

    public function updateVairuotoja($data) {
        $query = " UPDATE {$this->sunkvezimio_vairuotojai_lentele}
                    SET `nuo_data`='{$data['nuo_data']}',
                        `iki_data`='{$data['iki_data']}',
                        `fk_sunkvezimio_numeriai`='{$data['fk_sunkvezimio_numeriai']}',
                        `fk_vairuotojo_asmens_kodas`='{$data['fk_vairuotojo_asmens_kodas']}'
                    WHERE `id_sunkvezimio_vairuotojas`='{$data['id_sunkvezimio_vairuotojas']}'";
        mysql::query($query);
    }

    public function insertVairuotoja($data) {
        $query = " INSERT INTO `{$this->sunkvezimio_vairuotojai_lentele}`
                                (
                                    `nuo_data`,
                                    `iki_data`,
                                    `fk_sunkvezimio_numeriai`,
                                    `fk_vairuotojo_asmens_kodas`
                                )
                                VALUES
                                (
                                    '{$data['nuo_data']}',
                                    '{$data['iki_data']}',
                                    '{$data['fk_sunkvezimio_numeriai']}',
                                    '{$data['fk_vairuotojo_asmens_kodas']}'
                                )";
        mysql::query($query);
    }
}
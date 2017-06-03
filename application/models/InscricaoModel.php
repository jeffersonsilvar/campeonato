<?php

class InscricaoModel extends CI_Model {

    private $tableTresinscricao = "tresparticipantes";

//Cadastrar equipe com Três participantes
    public function insertTresParticipantes($equipe_participantes, $integrantes_participantes, $codigo_equipe, $nomePri_participantes, $rgPri_participantes, $cpfPri_partcipantes, $emailPri_participantes, $telefonePri_participantes, $NasciPri_participantes, $medioPri_participantes, $nomeSeg_participantes, $rgSeg_participantes, $cpfSeg_partcipantes, $emailSeg_participantes, $telefoneSeg_participantes, $NasciSeg_participantes, $medioSeg_participantes, $nomeTer_participantes, $rgTer_participantes, $cpfTer_partcipantes, $emailTer_participantes, $telefoneTer_participantes, $NasciTer_participantes, $medioTer_participantes, $escola, $aceito) {
        $data = array(
            'equipe_participantes' => $equipe_participantes,
            'integrantes_participantes' => $integrantes_participantes,
            'codigo_equipe' => $codigo_equipe,
            'nomePri_participantes' => $nomePri_participantes,
            'rgPri_participantes' => $rgPri_participantes,
            'cpfPri_partcipantes' => $cpfPri_partcipantes,
            'emailPri_participantes' => $emailPri_participantes,
            'telefonePri_participantes' => $telefonePri_participantes,
            'NasciPri_participantes' => $NasciPri_participantes,
            'medioPri_participantes' => $medioPri_participantes,
            'nomeSeg_participantes' => $nomeSeg_participantes,
            'rgSeg_participantes' => $rgSeg_participantes,
            'cpfSeg_partcipantes' => $cpfSeg_partcipantes,
            'emailSeg_participantes' => $emailSeg_participantes,
            'telefoneSeg_participantes' => $telefoneSeg_participantes,
            'NasciSeg_participantes' => $NasciSeg_participantes,
            'medioSeg_participantes' => $medioSeg_participantes,
            'nomeTer_participantes' => $nomeTer_participantes,
            'rgTer_participantes' => $rgTer_participantes,
            'cpfTer_partcipantes' => $cpfTer_partcipantes,
            'emailTer_participantes' => $emailTer_participantes,
            'telefoneTer_participantes' => $telefoneTer_participantes,
            'NasciTer_participantes' => $NasciTer_participantes,
            'medioTer_participantes' => $medioTer_participantes,
            'escola' => $escola,
            'aceito' => $aceito
        );

        if ($this->db->insert($this->tableTresinscricao, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

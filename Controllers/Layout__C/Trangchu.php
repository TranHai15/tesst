<!-- TrangChu__C -->

<?php
class Trangchu__C
{
    public function List($file = "Trangchu")
    {
        $modle = new Trangchu__M;
        $datasanphammoi =  $modle->getAll();
        $banchay = $modle->select__thuoctinh("2");
        $yody = $modle->select__thuoctinh(3);
        $aothun = $modle->select__thuoctinh(4);
        $yodysoft = $modle->select__thuoctinh(5);
        $yody__off = $modle->select__thuoctinh(6);
        $polo = $modle->select__thuoctinh(7);
        $Nam = $modle->get_nam();
        $Nu = $modle->get_nu();


        View("Layout", $file, [
            'datasanphammoi' => $datasanphammoi,
            'Nam' => $Nam, 'Nu' => $Nu,
            'banchay' => $banchay, 'yody' => $yody, 'aothun' => $aothun, 'yodysoft' => $yodysoft, 'yody__off' => $yody__off, 'polo' => $polo,
        ]);
    }

    public function Listnam($file = "Trangchu")
    {
        $modle = new Trangchu__M;
        $datasanphammoi =  $modle->getAll();
        $banchay = $modle->select__thuoctinh("2");
        $yody = $modle->select__thuoctinh(3);
        $aothun = $modle->select__thuoctinh(4);
        $yodysoft = $modle->select__thuoctinh(5);
        $yody__off = $modle->select__thuoctinh(6);
        $polo = $modle->select__thuoctinh(7);
        $data = $modle->get_nam();

        View("Layout", $file, [
            'datasanphammoi' => $datasanphammoi,
            'data' => $data,
            'banchay' => $banchay, 'yody' => $yody, 'aothun' => $aothun, 'yodysoft' => $yodysoft, 'yody__off' => $yody__off, 'polo' => $polo,
        ]);
    }

    public function Listnu($file = "Trangchu")
    {
        $modle = new Trangchu__M;
        $datasanphammoi =  $modle->getAll();
        $banchay = $modle->select__thuoctinh("2");
        $yody = $modle->select__thuoctinh(3);
        $aothun = $modle->select__thuoctinh(4);
        $yodysoft = $modle->select__thuoctinh(5);
        $yody__off = $modle->select__thuoctinh(6);
        $polo = $modle->select__thuoctinh(7);
        $data = $modle->get_nu();

        View("Layout", $file, [
            'datasanphammoi' => $datasanphammoi,
            'data' => $data,
            'banchay' => $banchay, 'yody' => $yody, 'aothun' => $aothun, 'yodysoft' => $yodysoft, 'yody__off' => $yody__off, 'polo' => $polo,
        ]);
    }
}

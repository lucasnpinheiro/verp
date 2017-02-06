<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Traits;

/**
 * Description of Funcoes
 *
 * @author lucas
 */
trait FuncoesTraits {

    //put your code here

    public $__fileUpload = [];

    public function getHipperLink($description) {
        return preg_replace('/(http:\/\/[\w\.\/-]+)/', '<a href="$1" target="_blank" rel="external">$1</a>', $description);
    }

    public function convertDate($str, $explode = '/', $concat = '-') {
        if (!empty($str)) {
            if (stripos($str, $explode) !== false) {
                $d = explode(' ', $str);
                $d[0] = implode($concat, array_reverse(explode($explode, $d[0])));
                if (isset($d[1])) {
                    $str = date('Y-m-d H:i:s', strtotime(implode(' ', $d)));
                } else {
                    $str = date('Y-m-d', strtotime(implode(' ', $d)));
                }
            }
        }
        return $str;
    }

    public function forceBoolean($str) {
        if (in_array($str, ['1', 1], 'on', true, 'true')) {
            return 1;
        }
        return 0;
    }

    public function replaceMoney($str, $decimals = 2) {
        if (!empty($str)) {
            if (stripos($str, ',')) {
                $str = str_replace('.', '', $str);
                return (float) number_format(str_replace(',', '.', $str), $decimals, '.', ',');
            }
            return (float) $str;
        }
        return $str;
    }

    public function posicaoToSQL($price) {
        $price = preg_replace('/[^0-9\.,-]*/i', '', $price);
        if (stripos($price, ',') !== false) {
            $price = str_replace('.', '', $price);
            $price = str_replace(',', '.', $price);
        }
        return doubleval($price);
    }

    public function removeMask($str) {
        return (string) str_replace(['.', ' ', '-', '_', '(', ')', '/', '\\'], '', $str);
    }

    public function mask($val, $mask) {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] === '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    public function _fileUpload($path, $dados, \Cake\Datasource\EntityInterface $entity) {
        $this->__fileUpload = [];
        if (isset($dados['error']) AND isset($dados['name']) AND $dados['error'] === 0 AND $dados['name'] != '') {
            $name = md5($dados['name'] . time() . uniqid());
            $fileTemp = new \Cake\Filesystem\File($dados['tmp_name'], true, 0775);
            $file = new \Cake\Filesystem\File($dados['name'], true, 0775);
            $ext = $file->ext();
            $this->__fileUpload = [
                'name' => $name,
                'ext' => $ext,
                'file' => $dados,
            ];
            if ($fileTemp->copy($path . $name . '.' . $ext, true)) {
                if (!empty($entity->path)) {
                    unlink($entity->path);
                }
                if (in_array($ext, ['jpg', 'jpeg', 'gif', 'png', 'bmp'])) {
                    $this->imagemRedimencinar($path . $name . '.' . $ext);
                }
                return $name . '.' . $ext;
            }
        }
        return null;
    }

    public function fileUploadError($error) {
        switch ($error) {
            case 1:
            case '1':
                return 'O arquivo enviado excede o limite maximo ' . ini_get('upload_max_filesize');
                break;
            case 2:
            case '2':
                return 'O arquivo excede o limite ' . ini_get('max_file_size');
                break;
            case 3:
            case '3':
                return 'O upload do arquivo foi feito parcialmente.';
                break;
            case 4:
            case '4':
                return 'Nenhum arquivo foi enviado.';
                break;
            case 5:
            case '5':
                return null;
                break;
            case 6:
            case '6':
                return 'Pasta temporária ausênte.';
                break;
            case 7:
            case '7':
                return 'Falha em escrever o arquivo em disco.';
                break;
            case 8:
            case '8':
                return 'Uma extensão do PHP interrompeu o upload do arquivo.';
                break;

            default:
                return null;
                break;
        }
        return null;
    }

    public function imagemRedimencinar($file) {
        $image = new \Eventviva\ImageResize($file);
        $image->resizeToBestFit(400, 400);
        $image->quality_jpg = 100;
        $image->quality_png = 9;
        $image->save($file);
        return $file;
    }

}

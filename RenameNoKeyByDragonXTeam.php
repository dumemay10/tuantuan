<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 24-09-2023 Sunday 15:06:10
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : 
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������4d787a01599921cd45279b6e1e1ad8397604dd4e46986efbec0634e6d733da7122e053031c4d9eb09682bbf0ecf8f787�z��nS��`!gU:���aA�΅��~�1�X+�Mt�����R���*�����W7�i`T� C`(�"s���mG㜻�6 ��/@Ǡ��j�K�.��}Y7=��(��Yy��	2��y."��v����+�ܤ�w��HΤ�F��%�Q��?U]R����b�'��Jl�&�:r��z�2M��q�#>=���q�;���M�t��� G�.ZT��~I���7j�����h��NZub�AR�!�c����+'B�0���)y���!�X+���$�O���Ig��	��	J�D��������JYv$@���q��k�ؠ��ⷡ����ݪE�a�|�T�x}��}7#.���\p�hr���.�`���-K�+����Jj#�G�����P�z�|y�!� �X�7#��M��ZÒ��hq Q:�3������܈W��� caLt0��,Z{ĉ.����5�K��;`�6����n��5��Wg3��/3����ȃ2�ꀌ�����`t\�9nq<�!�wP��/2A�#-�����+Dko+��-hW����Lj����S�����M��& J)�]�Auj	����*�.i|f�����;�u��Y�=~cv�#L�iǬdt�U���$��.L�\��'pq"QTñB��~�T��]+SZ�`����R�Bα-!�鉞��"���bCAL��^�s�datH�'���K��b?W��u�ɘEҷ��ǛB9�o���1ց+o���"�����%�ʇ�'ʱ�Ԏ���a�`o��4b�S��]����N�ϥ1Ų��H��=mr"̳����dY�����cr�!Lhk��P�co�/f�G�X1�m)_<e GS_Q��*�Җ�lI�3��� uL�k��i 4�M!/1RN�(�A V��؜��le��z'W=P�'ƞ�J8w���D3~/���R-�r:�M�+�Bww�����6�+�q���U� ��ҵG��j�
Mb���yH���8w��)%G�P@�}�
��"���pȼ�� j'�:�L�>�ǿ��;q�81�l�Ax4pɞ�(v�!�;���i��f>V��Ǚ`� k�tM ��V�>~�qM8$�,fx�Nn���7��_�����)y�[n���\�o��Rk���-������8l���Ϊ�(����Ț
���'*��V���"@"���R�d��e�ʎ�y/\{��w���$fG� �}�㉑��:@���KJ�A9�o�X���K�O��|o�;���[	�J�\�3�������e��T�%����s�io�="�I���3[ɕ|~&\�%��`}�\x���w纶;8���!g�w�����F�U���D-���76���\��m3AC�Qo��y�Xګ�Ze ���QIl��'��u*�x�[N���������ŰrF�vn`A��ή���h�Ų>Mb�&�k\�7}�O�E����8J�����Ag�Aj�T蕾 ��17�Ia�������)wQ{����Jn7�@�p�]�PL~�vr�����ُ�"c;�����i�>Q���HS�9E��}+�1�f�lk"���?%�`�n�Pe�Ù�Vf[��Ue)~�MD�K�YU2Y6hw|��9�bΓ��*�$am� >�V/���[1k�W1�3��#w����>i��aG��[F��(5�(�l��?Tk�
�G�4WU-��U��O��ADp5{gS���{?H��ִ�HK7���B���IOu�Icд����1^�^�ڐ�>�83�Ȱ^���V˓v��	1း�Se�|	`�^P}�g�{Ԯ�gAj8^U�Z7h�E��j�El��h���[t�eu���b�Dw�t�%D,�q
j�Ϭ]��!t��'�֊6-�w|4y�����ST���V+s?���8�pN)��� �����&$E�^�� �"/;�0��=��J�UR����۾d�e	V�!|�ѕ�e��}}sr�Cut��nl�{�7�;2�}�;���hx�
��3�s�3�A"�
�1s>AK�hA\,�|r�9I�$	�Ln�gDw3?��!mvTif+L�A���6>�E�t^j�����}}�.u�Ir��?rN'�{ܖL8�~��dF�}�ac,;-F�(w����5�/��p����Fa��
�3;'͖_��T�'@����h��zSX˷���#��vXxٖ��S�~�G���=@��ʊ���;�%ìU�EpK@6�9���[��(o߰3���!&����u���{y��kB"蔂�J�1�10L����0m���8��Rb��,Od����\�k�X�[��2u�׳ݩ���eV�GoO�jM9�\Z�&�d�z���5��@C��)��8���=���~��ݙ��J3�f�R%���	9����u��]��v�-f��p��|E�FoH�걑����!�Q�v�"��G�Ϟs������$ˋ k�0d�6J*���,"L%w�� w뻖�x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=428b425f607edb4a2a00b91bf453dea7b7270c23.end
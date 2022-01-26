<?php

 $rok = 2000;
        switch (($rok - 4) % 12)
        {
            case  0: $zodiac = 'Krysa';  break;

            case  1: $zodiac = 'Vôl';    break;

            case  2: $zodiac = 'Tiger';   break;

            case  3: $zodiac = 'Zajac';  break;

            case  4: $zodiac = 'Drak';  break;

            case  5: $zodiac = 'Had';   break;

            case  6: $zodiac = 'Kôň';  break;

            case  7: $zodiac = 'Ovca';  break;

            case  8: $zodiac = 'Opica' break;

            case  9: $zodiac = 'Kohút'; break;

            case 10: $zodiac = 'Pes';  break;

            case 11: $zodiac = 'Prasa';  break;
        }
        echo "Rok {$rok} je zodiak {$zodiac}.";
  ?>

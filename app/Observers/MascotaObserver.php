<?php

namespace App\Observers;

use App\Models\Mascota;
use Carbon\Carbon;
class MascotaObserver
{
    /**
     * Handle the Mascota "created" event.
     */
    public function created(Mascota $mascota): void
    {
        //
    }

    /**
     * Handle the Mascota "updated" event.
     */
    public static function updated(Mascota $mascota): void
    {
        $fechaNacimiento = Carbon::createFromFormat('Y-m-d', $mascota->fecha_nacimiento);
        $fechaActual = Carbon::now();
        if ($fechaNacimiento->diffInDays($fechaActual)<30) {
         $edad=$fechaNacimiento->diffInDays($fechaActual). " Dias";
         $mascota->edad = $edad;
        }elseif ($fechaNacimiento->diffInDays($fechaActual)>30 and $fechaNacimiento->diffInDays($fechaActual)<=365) {
           $edad=$fechaNacimiento->diffInMonths($fechaActual). " Meses";
           $mascota->edad = $edad;
        }elseif ($fechaNacimiento->diffInDays($fechaActual)>365) {
            $edad=$fechaNacimiento->diffInYears($fechaActual). " Años";
            $mascota->edad=$edad;
        }
        
    }

    /**
     * Handle the Mascota "deleted" event.
     */
    public function deleted(Mascota $mascota): void
    {
        //
    }

    /**
     * Handle the Mascota "restored" event.
     */
    public function restored(Mascota $mascota): void
    {
        //
    }

    /**
     * Handle the Mascota "force deleted" event.
     */
    public function forceDeleted(Mascota $mascota): void
    {
        //
    }
}

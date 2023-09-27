<?php

namespace App\Exports;

use App\Models\historiaClinica;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class HistoriasClinicasExport implements FromCollection,WithHeadings,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $historia;
    public function __construct($historia)
    {
        $this->historia = $historia;
    }
    public function collection()
    {
        return $this->historia;
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nombre De La Mascota',
            'Genero',
            'Peso',
            'Especie',
            'Edad',
            'Esterilizado',
            'Raza',
            'Color',
            'Medicina Preventiva',
            'Nombre Dueño',
            'Telefono',
            'Direccion',
            'Fc',
            'Fr',
            'Temperatura',
            'Llenado Capilar',
            'Pulso',
            'Diagnostico Diferencial',
            'Diagnostico Final',
            'Test De Laboratorio',
            'Tratamiento',
            '',
            'Fecha De Creacion',
            'Fecha De Actualizacion',
        ];
    }
    public function styles(Worksheet $sheet)
    {
       // Verificar si se está aplicando un filtro
    if (!empty($this->historia)) {
        // Aplicar estilos a los encabezados
        $sheet->getStyle('A1:Y1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '268CCA',
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ]);

        // Ajustar automáticamente el ancho de las columnas
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        $sheet->getColumnDimension('L')->setAutoSize(true);
        $sheet->getColumnDimension('M')->setAutoSize(true);
        $sheet->getColumnDimension('N')->setAutoSize(true);
        $sheet->getColumnDimension('O')->setAutoSize(true);
        $sheet->getColumnDimension('P')->setAutoSize(true);
        $sheet->getColumnDimension('Q')->setAutoSize(true);
        $sheet->getColumnDimension('R')->setAutoSize(true);
        $sheet->getColumnDimension('S')->setAutoSize(true);
        $sheet->getColumnDimension('T')->setAutoSize(true);
        $sheet->getColumnDimension('U')->setAutoSize(true);
        $sheet->getColumnDimension('V')->setAutoSize(true);
        $sheet->getColumnDimension('W')->setAutoSize(true);
        $sheet->getColumnDimension('X')->setAutoSize(true);
        $sheet->getColumnDimension('Y')->setAutoSize(true);
        // Continuar con el ajuste de las demás columnas

        // Aplicar estilos personalizados a las celdas de datos si es necesario
        // Ejemplo: aplicar un borde a todas las celdas de datos
        $dataRange = 'A2:Y' . (count($this->historia) + 1); // Asumiendo que los datos comienzan en la fila 2
        $sheet->getStyle($dataRange)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ]);
    }
    }
}

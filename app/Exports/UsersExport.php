<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithHeadings,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
    protected $usuarios;
    public function __construct($usuarios)
    {
        $this->usuarios = $usuarios;
    }
    public function collection()
    {
        return $this->usuarios;
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Apellido',
            'Direccion',
            'Telefono',
            'Documento',
            'Rol',
            'Correo',
            '',
            'Creado el',
            'Actualizado el',
        ];
    }
    public function styles(Worksheet $sheet)
    {
       // Verificar si se está aplicando un filtro
    if (!empty($this->usuarios)) {
        // Aplicar estilos a los encabezados
        $sheet->getStyle('A1:K1')->applyFromArray([
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
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        // Continuar con el ajuste de las demás columnas

        // Aplicar estilos personalizados a las celdas de datos si es necesario
        // Ejemplo: aplicar un borde a todas las celdas de datos
        $dataRange = 'A2:K' . (count($this->usuarios) + 1); // Asumiendo que los datos comienzan en la fila 2
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

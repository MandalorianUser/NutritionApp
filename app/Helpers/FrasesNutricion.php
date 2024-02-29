<?php
namespace App\Helpers;

class FrasesNutricion {
    private $frases = [
        ["Una alimentación balanceada es clave para una buena salud.", "Autor desconocido"],
        ["Somos lo que comemos. Opta por alimentos saludables.", "Hipócrates"],
        ["El desayuno es la comida más importante del día. No te saltes esta comida.", "Adelle Davis"],
        ["Come despacio y mastica bien los alimentos. Ayuda a una mejor digestión.", "Mahatma Gandhi"],
        ["Incluye una variedad de frutas y verduras en tu dieta diaria.", "Autor desconocido"],
        ["El agua es esencial para mantenernos hidratados y saludables.", "Autor desconocido"],
        ["Evita el consumo excesivo de azúcares y alimentos procesados.", "Autor desconocido"],
        ["No se trata de hacer dieta, se trata de hacer un cambio de estilo de vida.", "Unknown"],
        ["La comida que ingieres puede ser la medicina más segura y poderosa o el veneno más lento.", "Ann Wigmore"],
        ["Que el alimento sea tu medicina, y la medicina tu alimento.", "Hipócrates"],
        ["No hay dietas mágicas, no hay atajos, solo compromiso y trabajo duro.", "Jillian Michaels"],
        ["La buena comida es la base de la felicidad.", "Auguste Escoffier"],
        ["La calidad del alimento que ingieres afecta directamente la calidad de tu vida.", "Dr. Robert Lustig"],
        ["La dieta equilibrada puede ayudar a prevenir enfermedades crónicas y promover un envejecimiento saludable.", "Academia Americana de Nutrición y Dietética"],
        ["Una dieta saludable es una solución para muchos de nuestros problemas de salud. No es demasiado tarde para cambiar nuestros hábitos de alimentación.", "Johny Issa"],
        ["La alimentación sana puede convertirse en algo adictivo una vez que comienzas a ver los resultados.", "Autor desconocido"],
        ["El cuerpo logra lo que la mente cree. Cree en ti mismo y en tus elecciones alimenticias.", "Autor desconocido"],
        ["La clave para tener éxito en una dieta es concentrarse en alimentar tu cuerpo en lugar de privarlo.", "Autor desconocido"]
    ];
    
    public function obtenerFraseAleatoria() {
        // Seleccionar una frase aleatoria del arreglo
        $indiceAleatorio = array_rand($this->frases);
        return [
            'frase' => $this->frases[$indiceAleatorio][0],
            'autor' => $this->frases[$indiceAleatorio][1]
        ];
    }
}


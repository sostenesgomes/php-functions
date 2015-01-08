/**
 * Função que transforma o número de meses passado no parâmetro para a quantidade em anos e meses
 * Exemplo: De "18" meses para "1 ano e 6 meses"
 * 
 * Function that transforms the number of months in the parameter to the amount in years and months .
 * Example: "18" months to "1 year and 6 months"
 *
 * @author Sóstenes Gomes
 * @since 08/01/15
 * @param $quantityMonths
 * @return array|bool
 */

function monthsToYears($quantityMonths){

    if (!is_int($quantityMonths))
        return false;

    $years  = 0;
    $months = 0;

    $divMonths = $quantityMonths / 12;

    if (is_int($divMonths)){
        $years = $divMonths;
    }else{
        $auxYears  = $divMonths;
        $years     = (int)$divMonths;

        $subMonths  = $auxYears - $years;
        $add        = ($subMonths <= 0.5) ? 1 : 2;
        $exp        = explode(",", (string)$subMonths);

        $months = ((int)substr($exp[1], 0, 1)) + $add;
    }

    $output = array(
        'years'  => $years,
        'months' => $months
    );

    return $output;
}

monthsToYears(18);

<?php
/**
 * Created by PhpStorm.
 * User: talga
 * Date: 05.03.2018
 * Time: 17:07
 */
if (isset($_POST['form_3_submit'])) {

    $cur_user_id = get_current_user_id();
    // $cur_user_id = 1;
    global $wpdb;
    $table_name = $wpdb->prefix . "addition_informaion";
    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    $form_3_court = $_POST['form_3_court'];

    $form_3_name_creditor[] = $_POST['form_3_name_creditor'];
    $form_3_location[] = $_POST['form_3_location'];
    $form_3_inn[] = $_POST['form_3_inn'];
    $form_3_ogrn[] = $_POST['form_3_ogrn'];
    $form_3_phone[] = $_POST['form_3_phone'];
    $form_3_fax[] = $_POST['form_3_fax'];
    $form_3_email[] = $_POST['form_3_email'];

    $form_3_obyazatelstvo[] = $_POST['form_3_obyazatelstvo'];

    $form_3_total_debt = $_POST['form_3_total_debt'];

    $form_3_prosrochka = $_POST['form_3_prosrochka'];
    $form_3_prosrochka_number = $_POST['form_3_prosrochka_number'];
    $form_3_have_property = $_POST['form_3_have_property'];
    $form_3_have_property_number = $_POST['form_3_have_property_number'];
    $form_3_have_work = $_POST['form_3_have_work'];
    $form_3_have_work_number = $_POST['form_3_have_work_number'];

    $form_3_dont_paymen = $_POST['form_3_dont_paymen'];
    $form_3_ten_percent_dont_success = $_POST['form_3_ten_percent_dont_success'];
    $form_3_size_debt = $_POST['form_3_size_debt'];
    $form_3_no_property = $_POST['form_3_no_property'];

    $form_3_sro = $_POST['form_3_sro'];
    $form_3_privlechenie = $_POST['form_3_privlechenie'];
    $form_3_privlechenie_number = $_POST['form_3_privlechenie_number'];

    $form_3_dont_paymen = $_POST['form_3_dont_paymen'];
    $form_3_sdelki_docs = $_POST['form_3_sdelki_docs'];
    $form_3_vipiska = $_POST['form_3_vipiska'];
    $form_3_vipiska_banka = $_POST['form_3_vipiska_banka'];
    $form_3_copy_postanovka_uchet = $_POST['form_3_copy_postanovka_uchet'];
    $form_3_copy_postanovka_brak = $_POST['form_3_copy_postanovka_brak'];
    $form_3_copy_break_brak = $_POST['form_3_copy_break_brak'];
    $form_3_copy_order_brak = $_POST['form_3_copy_order_brak'];
    $form_3_delivery_property = $_POST['form_3_delivery_property'];
    $form_3__bird_baby = $_POST['form_3__bird_baby'];
    $form_3_unemployed = $_POST['form_3_unemployed'];


    $redycourt = explode('|', $form_3_court);

    $html = '
    <table style="border: none; width: 100%; " cellpadding="5">
        <tbody>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">В</td>
                <td style="width: 40%;">' . $redycourt[0] . ' ' . $redycourt[1] . '</td>
            </tr>
            <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Должник</td>
                <td style="width: 40%;"> ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . ' <br>Место жительства: ' . $results[0]->place_live . '<br>Дата и место рождения: ' . date("d.m.y", strtotime($results[0]->bird_day)) . ',<br>
                                         ' . $results[0]->place_bird . ' <br>Телефон: ' . $results[0]->extra_phone . '<br>E-mail: ' . $results[0]->extra_email . '<br></td>
            </tr>';
    $count_creditor = 1;
    for ($i = 0; $i < count($form_3_name_creditor[0]); $i++) {
        $html .= '
    
            <tr>
                <td style = "width: 30%;" > </td >
                <td style = "width: 30%; text-align: right;" > Конкурсный<br > кредитор ' . $count_creditor . ' </td >
                <td style = "width: 40%;" > ' . $form_3_name_creditor[0][$i] . '<br>Место нахождения:<br>
                                   ' . $form_3_location[0][$i] . '<br>ИНН: ' . $form_3_inn[0][$i] . ';ОГРН: ' . $form_4_ogrn[0][$i] . '<br>Телефон: ' . $form_3_phone[0][$i] . '<br>Факс: ' . $form_3_fax[0][$i] . '<br>E-mail: ' . $form_3_email[0][$i] . '<br>
                 </td>
            </tr >
            ';
    }
    $html .= '   
               <tr>
                <td style="width: 30%;"> </td>
                <td style="width: 30%; text-align: right;">Размер<br>госпошлины</td>
                <td style="width: 40%;">300 рублей</td>
                </tr>    
        </tbody>
    </table>
    
        <h1 style="text-align: center;">ЗАЯВЛЕНИЕ<br> о признании гражданина банкротом </h1>
        <p  style="text-align: justify;"><span style="color: #fff;">wdaw</span>Я, гражданин РФ - ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '  ' . date("d.m.y", strtotime($results[0]->bird_day)) . ' г.р., паспорт: серия ' . $results[0]->passport_number. '  № ' . $results[0]->passport_serial . ', выдан ' . date("m.d.y", strtotime($results[0]->passport_issued_date)) . '  ' . $results[0]->passport_issued_by . '
            , ИНН ' . $results[0]->extra_inn . ', СНИЛС ' . $results[0]->extra_snils . ' (далее по тексту настоящего заявления - «Должник»).
            Обращаюсь в Суд с настоящим заявлением, поскольку, по состоянию на ' . date("d.m.y") . ' имею
            следующие обязательства:
        ';

    for ($j = 0; $j < count($form_3_obyazatelstvo[0]); $j++) {

        $html .= '<br><span style="color: #fff;">wdaw</span>- ' . $form_3_obyazatelstvo[0][$j] . '
        ';
    }

    $html .= '<br><span style="color: #fff;">wdaw</span>Общая сумма задолженности по вышеуказанным обязательствам на момент подачи настоящего
        заявления составляет  ' . $form_3_total_debt . '  (' . num2str($form_3_total_debt) . ')
        <br><span style="color: #fff;">wdaw</span>Сумма просроченной к исполнению задолженности - ';
    if ($form_3_prosrochka == 'on') {
        $html .= $form_3_prosrochka_number . ' (' . num2str($form_3_prosrochka_number) . ')<br>';

    } else {

        $html .= '(ноль рублей 00 копеек)<br>';
    }
    $html .= '<span style="color: #fff;">wdaw</span>На момент подачи настоящего заявления у Должника имеется имущество на сумму -';

    if ($form_3_have_property == 'on') {
        $html .= $form_3_have_property_number . ' (' . num2str($form_3_have_property_number) . ')<br>';

    } else {

        $html .= '(ноль рублей 00 копеек)<br>';
    }
    $html .= '<span style="color: #fff;">wdaw</span>На момент подачи настоящего заявления у Должника имеется ежемесячный доход в размере -';
    if ($form_3_have_work == 'on') {
        $html .= $form_3_have_work_number . ' (' . num2str($form_3_have_work_number) . ')<br>';

    } else {

        $html .= '(ноль рублей 00 копеек)<br>';
    }

    $html .= '<span style="color: #fff;">wdaw</span>Таким образом, имеющиеся у Должника доход и имущество не позволяют исполнить денежные
        обязательства и (или) обязанности по уплате обязательных платежей в полном объеме в
        установленный срок.
        <br><span style="color: #fff;">wdaw</span>В соответствии с п. 2 ст. 213.4 Федерального закона от 26.10.2002 г. № 127-ФЗ «О
        несостоятельности (банкротстве)» (далее по тексту настоящего заявления - «Закон») - 
        «Гражданин вправе подать в арбитражный суд заявление о признании его банкротом в случае
        предвидения банкротства при наличии обстоятельств, очевидно свидетельствующих о том, что
        он не в состоянии исполнить денежные обязательства и (или) обязанность по уплате
        обязательных платежей в установленный срок, при этом гражданин отвечает признакам
        неплатежеспособности и (или) признакам недостаточности имущества.» Таким образом, я, как
        должник, предвидящий своё банкротство, материальное положение которого очевидно
        свидетельствует о том, что я не в состоянии исполнить денежные обязательства и (или)
        обязанность по уплате обязательных платежей в установленный срок, обращаюсь в арбитражный
        суд с настоящим заявлением о признании меня несостоятельным (банкротом).<br>
        <span style="color: #fff;">wdaw</span>Согласно абз. 2 п. 2 ст. 213.6. Закона - Определение о признании обоснованным заявления
        гражданина о признании его банкротом и введении реструктуризации долгов гражданина
        выносится в случае, если указанное заявление соответствует требованиям, предусмотренным
        статьей 213.4 настоящего Федерального закона, и доказана неплатежеспособность гражданина.
        На момент обращения в арбитражный суд, фактически являюсь неплатёжеспособным, поскольку,
        имеют место следующие обстоятельства, указанные в п. 3 ст. 213.6 Закона:
        </p> 
';
    if ($form_3_dont_paymen == 'on') {

        $html .= '<span style="color: #fff;">wdaw</span>- гражданин прекратил расчеты с кредиторами, то есть перестал исполнять денежные
                    обязательства и (или) обязанность по уплате обязательных платежей, срок исполнения
                    которых наступил;<br>
                    ';
    }
    if ($form_3_ten_percent_dont_success == 'on') {

        $html .= '<span style="color: #fff;">wdaw</span>- более чем десять процентов совокупного размера денежных обязательств и (или)
                    обязанности по уплате обязательных платежей, которые имеются у гражданина и срок
                    исполнения которых наступил, не исполнены им в течение более чем одного месяца со
                    дня, когда такие обязательства и (или) обязанность должны быть исполнены;<br>
                    ';
    }
    if ($form_3_size_debt == 'on') {

        $html .= '<span style="color: #fff;">wdaw</span>- размер задолженности гражданина превышает стоимость его имущества, в том числе
                    права требования;<br>
                    ';
    }
    if ($form_3_no_property == 'on') {

        $html .= '<span style="color: #fff;">wdaw</span>- наличие постановления об окончании исполнительного производства в связи с тем, что
                    у гражданина отсутствует имущество, на которое может быть обращено взыскание;
                    <br>
                    ';
    }
    $court = explode("|", $form_3_sro);

    $html .= '<span style="color: #fff;">wdaw</span>На основании п. 4 ст. 213.4 Закона, финансового управляющего прошу утвердить из членов
                следующей саморегулируемой организации (СРО):  <br>';

    $html .= '<span style="color: #fff;">wdaw</span>- Наименование саморегулируемой организации (СРО): ' . stripcslashes($court[0]) . ';<br>';
    $html .= '<span style="color: #fff;">wdaw</span>- Адрес саморегулируемой организации (СРО):  ' . stripcslashes($court[1]). ';<br>';

    $html .= '<span style="color: #fff;">wdaw</span>Настоящим даю своё согласие на привлечение лиц, обеспечивающих исполнение возложенных
                на финансового управляющего обязанностей. Максимальный размер осуществляемых за мой счет
                расходов финансового управляющего на оплату услуг привлекаемых лиц - '.$form_3_privlechenie_number.' '.num2str($form_3_privlechenie_number).'.
                На основании вышеизложенного, а также руководствуясь ст. ст. 213.1-213.4; 213.6; ФЗ от
                26.10.2002 г. № 127-ФЗ «О несостоятельности (банкротстве)», ст. 223; ст. 224 АПК РФ.<br>';


    $html .= '<h1 style="text-align: center;">ПРОШУ СУД:</h1>
    <p  style="text-align: justify;"><span style="color: #fff;">wdaw</span>1. Признать гражданина РФ -  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '  ' . date("m.d.y", strtotime($results[0]->bird_day)) . ' г.р., паспорт: серия ' . $results[0]->passport_number . '  № ' . $results[0]->passport_serial. ', выдан ' . date("m.d.y", strtotime($results[0]->passport_issued_date)) . '  ' . $results[0]->passport_issued_by . '
            , ИНН ' . $results[0]->extra_inn . ', СНИЛС ' . $results[0]->extra_snils . ' несостоятельным (банкротом);<br><span style="color: #fff;">wdaw</span><span style="text-align: left;">2. Утвердить финансового управляющего из числа членов следующей саморегулируемой
        организации (СРО):<br><span style="color: #fff;">wdaw</span>- Наименование саморегулируемой организации (СРО):</span> ' . stripcslashes($court[0]) . ';<br><span style="color: #fff;">wdaw</span>- Адрес саморегулируемой организации (СРО):  ' . $court[1] . ';<br>
    </p>';

    $html .= '
        <h3>Приложение:</h3> 
    ';

    $html .= '<br><span style="color: #fff;">wdaw</span>- документы, подтверждающие наличие задолженности, основание ее возникновения и
                    неспособность гражданина удовлетворить требования кредиторов в полном объеме;
                    
                    ';

    $html .= '<br><span style="color: #fff;">wdaw</span>- документы, подтверждающие наличие или отсутствие у гражданина статуса
                    индивидуального предпринимателя; 
                    
                    ';

    $html .= '<br><span style="color: #fff;">wdaw</span>- списки кредиторов и должников гражданина по утверждённой регулирующим органом
                    форме; 
                    
                    ';


    $html .= '<br><span style="color: #fff;">wdaw</span>- опись имущества по утверждённой регулирующим органом форме; 
                    
                    ';

    if ($form_3_dont_paymen == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копии документов, подтверждающих право собственности имущество, и документов,
                    удостоверяющих исключительные права на результаты интеллектуальной деятельности;
                    
                    ';
    }
    if ($form_3_sdelki_docs == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копии документов о совершавшихся в течение трех лет до даты подачи заявления
                    сделках с недвижимым имуществом, ценными бумагами, долями в уставном капитале,
                    транспортными средствами и сделках на сумму свыше трехсот тысяч рублей;
                   
                    ';
    }
    if ($form_3_vipiska == 'on') {

        $html .= ' <br><span style="color: #fff;">wdaw</span>- выписка из реестра акционеров (участников) юридического лица, акционером
                    (участником) которого является гражданин;
                    
                    ';
    }
    if ($form_3_vipiska_banka == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- выданная банком справка о наличии счетов, вкладов (депозитов) в банке и (или) об
                    остатках денежных средств на счетах, во вкладах (депозитах), выписки по операциям на
                    счетах, по вкладам (депозитам) граждан, в том числе индивидуальных предпринимателей,
                    в банке за трехлетний период, предшествующий дате подачи заявления о признании
                    гражданина банкротом, справки об остатках электронных денежных средств и о переводах
                    электронных денежных средств за трехлетний период, предшествующий дате подачи
                    заявления о признании гражданина банкротом;
                    
                    ';
    }
    if ($form_3_copy_postanovka_uchet == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия свидетельства о постановке на учет в налоговом органе;
                    
                    ';
    }
    if ($form_3_copy_postanovka_brak == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия свидетельства о заключении брака (при наличии заключенного и не
                    расторгнутого на дату подачи заявления брака);
                    
                    ';
    }
    if ($form_3_copy_break_brak == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия свидетельства о расторжении брака, если оно выдано в течение трех лет до
                    даты подачи заявления; 
                    
                    ';
    }
    if ($form_3_copy_order_brak == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия брачного договора; 
                    
                    ';
    }
    if ($form_3_delivery_property == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия соглашения или судебного акта о разделе общего имущества супругов,
                соответственно заключенного и принятого в течение трех лет до даты подачи заявления; 
                    
                    ';
    }
    if ($form_3__bird_baby == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия свидетельства о рождении ребенка, если гражданин является его родителем,
                    усыновителем или опекуном; 
                    
                    ';
    }
    if ($form_3_unemployed == 'on') {

        $html .= '<br><span style="color: #fff;">wdaw</span>- копия решения о признании гражданина безработным, выданная государственной
                    службой занятости населения, в случае принятия указанного решения;
                    
                    ';
    }
    $html .= '<br><span style="color: #fff;">wdaw</span>- сведения о полученных доходах и об удержанных суммах налога за трехлетний
                    период, предшествующий дате подачи заявления;<br><span style="color: #fff;">wdaw</span>- копия страхового свидетельства обязательного пенсионного страхования;<br><span style="color: #fff;">wdaw</span>- сведения о состоянии индивидуального лицевого счета застрахованного лица;<br><span style="color: #fff;">wdaw</span>- документы, подтверждающие направление настоящего заявления Кредиторам заказным
                    письмом с уведомлением о вручении адресу;<br><span style="color: #fff;">wdaw</span>-  квитанция, подтверждающая внесение в депозит суда денежных средств на выплату
                    вознаграждения финансовому управляющему;<br><span style="color: #fff;">wdaw</span>-  квитанция, подтверждающая оплату госпошлины.<br>
    <p style="text-align:right;">
        _____________  ' . $results[0]->first_name . ' ' . $results[0]->second_name . ' ' . $results[0]->third_name . '
    </p>';
    generateform($html, 'form3');

}
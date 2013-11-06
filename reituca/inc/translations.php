<?php

//EN Footer LP Note
if ((get_option('lp_footer_text_en')== '')){
    $lp_footer_txt_en = <<<FTEN
Risk warning: Forex products are leveraged products and trading forex therefore involves a high level of risk that may not be suitable for everyone and where you may lose your initial investment. XForex recommends that you ensure that you fully understand the risks involved before making any decision concerning XForex products. Independent advice should be sought if necessary. You must be eighteen years of age or older to register with XForex. We will never pass your details on to any third party. Nor will we ever intentionally use them for any malicious purpose including the transmission of viruses and/or spam. This promotion is provided by O.C.M Online Capital Markets Pty Ltd and is subject to our Terms & Conditions. For more information: see our
<a target="_blank" href="http://www.xforex.com/about-us/regulation/international/privacy-policy">Privacy Policy</a>
and <a target="_blank" href="http://www.xforex.com/about-us/regulation/international/terms-and-conditions">Terms & Conditions</a>.
FTEN;
    $website_footer_txt_en = <<<WEBFTEN
Risk warning: Forex products are leveraged products and trading forex therefore involves a high level of risk that may not be suitable for everyone and where you may lose your initial investment. XForex recommends that you ensure that you fully understand the risks involved before making any decision concerning XForex products. Independent advice should be sought if necessary. You must be eighteen years of age or older to register with XForex. We will never pass your details on to any third party. Nor will we ever intentionally use them for any malicious purpose including the transmission of viruses and/or spam. This promotion is provided by O.C.M Online Capital Markets Pty Ltd and is subject to our Terms & Conditions. For more information: see our
<a target="_blank" href="http://www.xforex.com/about-us/regulation/international/privacy-policy">Privacy Policy</a>
and <a target="_blank" href="http://www.xforex.com/about-us/regulation/international/terms-and-conditions">Terms & Conditions</a>.
WEBFTEN;
}
else{
    $lp_footer_txt_en = get_option('lp_footer_text_en');
    $website_footer_txt_en = get_option('website_footer_text_en');
}
//RU Footer LP Note
if (get_option('lp_footer_text_ru')== ''){
    $lp_footer_txt_ru = <<<FTRU
Предупреждение о риске: Продукция Forex является заемной и поэтому торговля на рынке Форекс предполагает высокий уровень риска, который может подходить не всем и где вы можете потерять ваши первоначальные инвестиции. XForex рекомендует вам убедититься в том, что вы полностью понимаете весь риск, прежде чем принять какое-либо решение относительно продукции XForex. При необходимости вы можете обращаться за помощью. Для того, чтобы зарегистрироваться в XForex вам должно быть восемнадцать лет или более. Мы никогда не передаем личную информацию какой-либо третьей стороне. Также, мы не будем когда-либо намеренно использовать ее для любых вредоносных целей, включая передачу вирусов и / или спам. Данная акция осуществляется ассоциированной группой OCM Online Capital Markets с учетом правил и условий. www.xforex.com.Нажмите здесь для нашей политики неразглашения , правил и условий
FTRU;
    $website_footer_txt_ru = <<<WEBFTRU
Предупреждение о риске: Продукция Forex является заемной и поэтому торговля на рынке Форекс предполагает высокий уровень риска, который может подходить не всем и где вы можете потерять ваши первоначальные инвестиции. XForex рекомендует вам убедититься в том, что вы полностью понимаете весь риск, прежде чем принять какое-либо решение относительно продукции XForex. При необходимости вы можете обращаться за помощью. Для того, чтобы зарегистрироваться в XForex вам должно быть восемнадцать лет или более. Мы никогда не передаем личную информацию какой-либо третьей стороне. Также, мы не будем когда-либо намеренно использовать ее для любых вредоносных целей, включая передачу вирусов и / или спам. Данная акция осуществляется ассоциированной группой OCM Online Capital Markets с учетом правил и условий. www.xforex.com.Нажмите здесь для нашей политики неразглашения , правил и условий
WEBFTRU;
}
else{
    $lp_footer_txt_ru = get_option('lp_footer_text_ru');
    $website_footer_txt_ru = get_option('website_footer_text_ru');
}
//AR Footer LP Note
if (get_option('lp_footer_text_ar')== ''){
    $lp_footer_txt_ar = <<<FTAR
في الفوركس الحسابات تكون مع رافعة مالية والتداول بالفوركس ينطوي بالتالي على مستوى عال من المخاطر التي قد لا تكون مناسبة للجميع. إكس فوركس تنصحك أن تفهم تماما المخاطر التي ينطوي عليها هذا السوق قبل إتخاذ أي قرار بشأن الخدمات في إكس فوركس. ينبغي المشورة المستقلة إذا لزم الأمر وحيث قد تفقد استثمارك الأولي. التسجيل مع Xforex مسموح لمن هم في جيل 18 سنة فما فوق. لن يتم تمرير تفاصيلك الخاصة إلى أي طرف ثالث. كما أنه لن يتم استخدامهم لأي غرض من الأغراض بما في ذلك ارسال رسائل غير مرغوب بها. هذه الحملة مقدمة من مجموعة O.C.M Online Capital Markets تخضع للشروط والأحكام. www.xforex.com. إضغط هنا لتصفح شروط الموقع وسياسة الخصوصية
FTAR;
    $website_footer_txt_ar = <<<WEBFTAR
في الفوركس الحسابات تكون مع رافعة مالية والتداول بالفوركس ينطوي بالتالي على مستوى عال من المخاطر التي قد لا تكون مناسبة للجميع. إكس فوركس تنصحك أن تفهم تماما المخاطر التي ينطوي عليها هذا السوق قبل إتخاذ أي قرار بشأن الخدمات في إكس فوركس. ينبغي المشورة المستقلة إذا لزم الأمر وحيث قد تفقد استثمارك الأولي. التسجيل مع Xforex مسموح لمن هم في جيل 18 سنة فما فوق. لن يتم تمرير تفاصيلك الخاصة إلى أي طرف ثالث. كما أنه لن يتم استخدامهم لأي غرض من الأغراض بما في ذلك ارسال رسائل غير مرغوب بها. هذه الحملة مقدمة من مجموعة O.C.M Online Capital Markets تخضع للشروط والأحكام. www.xforex.com. إضغط هنا لتصفح شروط الموقع وسياسة الخصوصية
WEBFTAR;
}
else{
    $lp_footer_txt_ar = get_option('lp_footer_text_ar');
    $website_footer_txt_ar = get_option('website_footer_text_ar');
}
//FR Footer LP Note
if (get_option('lp_footer_text_fr')== ''){
    $lp_footer_txt_fr = <<<FTFR
Avertissement lié au risque: Les produits forex sont des produits utilisant un effet de levier et de ce fait le trading de devises comporte un degré élevé de risque susceptible de ne pas convenir à tout le monde et où vous risquez de perdre le montant investi. XForex vous recommande de vous assurer que vous compreniez les risques associés avant de prendre toute décision concernant les produits de XForex. Il est recommandé de faire appel à un avis extérieur et indépendant si nécessaire. Assurez-vous de bien comprendre les risques éventuels et de déterminer si vous êtes à même faire face à la perte de tout ou partie du capital investi. XForex est un nom commercial utilisé par XFR Financial Ltd (anciemment O.C.M Online Capital Markets Ltd), qui possède une licence et qui est régulée par la Cyprus Securities and Exchange Commission ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC</a> - numéro de licence 108/10), sous l'autorité de la Directive européenne sur les marchés financiers (MiFID). Offre soumise à conditions. www.xforex.com. Cliquez ici pour notre <a target="_blank" href="http://www.xforex.com/fr/about-us/regulation/europe/privacy-policy">Politique de confidentialité</a> et nos <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Termes et Conditions</a>.
FTFR;
    $website_footer_txt_fr = <<<WEBFTFR
Avertissement lié au risque: Les produits forex sont des produits utilisant un effet de levier et de ce fait le trading de devises comporte un degré élevé de risque susceptible de ne pas convenir à tout le monde et où vous risquez de perdre le montant investi. XForex vous recommande de vous assurer que vous compreniez les risques associés avant de prendre toute décision concernant les produits de XForex. Il est recommandé de faire appel à un avis extérieur et indépendant si nécessaire. Assurez-vous de bien comprendre les risques éventuels et de déterminer si vous êtes à même faire face à la perte de tout ou partie du capital investi. XForex est un nom commercial utilisé par XFR Financial Ltd (anciemment O.C.M Online Capital Markets Ltd), qui possède une licence et qui est régulée par la Cyprus Securities and Exchange Commission ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC</a> - numéro de licence 108/10), sous l'autorité de la Directive européenne sur les marchés financiers (MiFID). Offre soumise à conditions. www.xforex.com. Cliquez ici pour notre <a target="_blank" href="http://www.xforex.com/fr/about-us/regulation/europe/privacy-policy">Politique de confidentialité</a> et nos <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Termes et Conditions</a>.
WEBFTFR;
}
else{
    $lp_footer_txt_fr = get_option('lp_footer_text_fr');
    $website_footer_txt_fr = get_option('website_footer_text_fr');
}
//IT Footer LP Note
if (get_option('lp_footer_text_it')== ''){
    $lp_footer_txt_it = <<<FTIT
Avviso di Rischio: I Prodotti Forex sono prodotti sotto leva e il forex trading comporta quindi un elevato livello di rischio che può non essere adatto a tutti e dove si rischia di perdere il proprio investimento iniziale. XForex consiglia di assicurarsi di comprendere i rischi prima di prendere qualsiasi decisione in merito ai XForex prodotti. Una consulenza indipendente dovrebbe essere cercata se necessario. Assicurati di comprendere I rischi potenziali e accertati se sia possibile ammortizzare la perdita di tutto o parte del capitale investito. XForex è un nome commerciale utilizzato da XFR Financial Ltd (precedentemente conosciuto come O.C.M. Online Capital Markets Ltd) autorizzato e regolamentato dalla Securities and Exchange Cipro ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC-</a> numero di licenza 108/10), governato dai mercati europei in Financial Instruments Directive (MiFID). Soggetto a termini e condizioni. <a href="http://www.xforex.com/">www.xforex.com</a> . Clicca qui per la nostra <a title="" target="_blank" href="http://www.xforex.com/es/about-us/regulation/europe/privacy-policy">Polizza di Privacy</a> ed i <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Termini e le Condizioni</a> .
FTIT;
    $website_footer_txt_it = <<<WEBFTIT
Avviso di Rischio: I Prodotti Forex sono prodotti sotto leva e il forex trading comporta quindi un elevato livello di rischio che può non essere adatto a tutti e dove si rischia di perdere il proprio investimento iniziale. XForex consiglia di assicurarsi di comprendere i rischi prima di prendere qualsiasi decisione in merito ai XForex prodotti. Una consulenza indipendente dovrebbe essere cercata se necessario. Assicurati di comprendere I rischi potenziali e accertati se sia possibile ammortizzare la perdita di tutto o parte del capitale investito. XForex è un nome commerciale utilizzato da XFR Financial Ltd (precedentemente conosciuto come O.C.M. Online Capital Markets Ltd) autorizzato e regolamentato dalla Securities and Exchange Cipro ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC-</a> numero di licenza 108/10), governato dai mercati europei in Financial Instruments Directive (MiFID). Soggetto a termini e condizioni. <a href="http://www.xforex.com/">www.xforex.com</a> . Clicca qui per la nostra <a title="" target="_blank" href="http://www.xforex.com/es/about-us/regulation/europe/privacy-policy">Polizza di Privacy</a> ed i <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Termini e le Condizioni</a> .
WEBFTIT;
}
else{
    $lp_footer_txt_it = get_option('lp_footer_text_it');
    $website_footer_txt_it = get_option('website_footer_text_it');
}
//ES Footer LP Note
if (get_option('lp_footer_text_es')== ''){
    $lp_footer_txt_es = <<<FTES
Advertencia de riesgo: Los productos de trading Forex son productos apalancados que acarrean un alto nivel de riesgo que puede no ser adecuado para todos y donde puede perder su inversión inicial. XForex recomienda que se asegure de entender plenamente los riesgos implicados antes de tomar cualquier decisión respecto a los productos de XForex. Se debe buscar asesoramiento independiente si es necesario. XForex es un nombre comercial utilizado por XFR Financial Ltd (Formalmente conocido como O.C.M Online Capital Markets Ltd), autorizado y regulado por Cyprus Securities and Exchange Commission ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC</a> - Licencia Número 108/10), regido por la Directiva Europea de Mercados e Instrumentos Financieros (MiFID). Sujetos a los <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Términos y Condiciones</a> . www.xforex.com. Haga click aqui para obtener nuestras <a target="_blank" href="http://www.xforex.com/es/about-us/regulation/europe/privacy-policy">políticas de privacidad</a>.
FTES;
    $website_footer_txt_es = <<<WEBFTES
Advertencia de riesgo: Los productos de trading Forex son productos apalancados que acarrean un alto nivel de riesgo que puede no ser adecuado para todos y donde puede perder su inversión inicial. XForex recomienda que se asegure de entender plenamente los riesgos implicados antes de tomar cualquier decisión respecto a los productos de XForex. Se debe buscar asesoramiento independiente si es necesario. XForex es un nombre comercial utilizado por XFR Financial Ltd (Formalmente conocido como O.C.M Online Capital Markets Ltd), autorizado y regulado por Cyprus Securities and Exchange Commission ( <a target="_blank" href="http://www.cysec.gov.cy/licence_members_1_en.aspx">CySEC</a> - Licencia Número 108/10), regido por la Directiva Europea de Mercados e Instrumentos Financieros (MiFID). Sujetos a los <a target="_blank" href="http://www.xforex.com/about-us/regulation/europe/terms-and-conditions">Términos y Condiciones</a> . www.xforex.com. Haga click aqui para obtener nuestras <a target="_blank" href="http://www.xforex.com/es/about-us/regulation/europe/privacy-policy">políticas de privacidad</a>.
WEBFTES;
}
else{
    $lp_footer_txt_es = get_option('lp_footer_text_es');
    $website_footer_txt_es = get_option('website_footer_text_es');
}


//get the relevant text to the in-post and opup forms
$form_lang = get_option('lang_in_form');
if($form_lang == ''){$form_lang = 'en';} 
    switch ( $form_lang ) {
	case 'en' :
        $inpost_title = 'Get a free Forex PDF PLUS:';
        $inpost_lis = <<<LIS
        <li>14 Video Lessons</li>
        <li>Free One-on-One Training</li>
        <li>A 5000$ Training Account</li>
        <li>In-House Daily Analysis</li>
        <li>Get FULL ACCESS</li>
LIS;
        $submitValue = 'Start Trading Now';
        $submitValueShort = 'Start Trading';
        $emailLabel = 'Email';
        $phoneLabel = 'Phone';
        $nameLabel = 'Name';
        $textArea = 'Your Questions / Suggestions';
        $contactPageLabel = 'Contact';
        $contactSubmit = 'Send';
        $WebsiteFooterText = $website_footer_txt_en;  
    break;
    case 'ru' : 
        $inpost_title = 'Получите бесплатный PDF о форекс, и также:';
        $inpost_lis = <<<LIS
        <li>14 Видео уроки</li>
        <li>Индивидуальный тренинг</li>
        <li>$5000 учебный счет</li>
        <li>Ежедневный анализ</li>
        <li>Получить полный доступ!</li>
LIS;
        $submitValue = 'Начать торговлю сегодня';
        $submitValueShort = 'Начать торговлю';
        $emailLabel = 'E-mail';
        $phoneLabel = 'телефон';
        $nameLabel = 'имя';
        $textArea = 'Ваши вопросы / предложение';
        $contactPageLabel = 'контакт';
        $contactSubmit = 'посылать';
        $WebsiteFooterText = $website_footer_txt_ru;
    break;
	case 'it': 
        $inpost_title = 'Ottiene un PDF Forex PLUS gratuito:';
        $inpost_lis = <<<LIS
        <li>14 Video Lezioni</li>
        <li>Formazione One-on-One gratuita</li>
        <li>Un conto demo di 5000$</li>
        <li>Analisi giornaliera interna</li>
        <li>Ottieni l'accesso completo</li>
LIS;
        $submitValue = 'Inizia il trading Oggi';
        $submitValueShort = 'Inizio Trading';
        $emailLabel = 'Email';
        $phoneLabel = 'Telefono';
        $nameLabel = 'Nome';
        $textArea = 'Le vostre domande / Suggerimenti';
        $contactPageLabel = 'Contatto';
        $contactSubmit = 'Inviare';
        $WebsiteFooterText = $website_footer_txt_it;
    break;
    case 'es': 
        $inpost_title = 'Obtenga gratis un pdf de forex plus:';
        $inpost_lis = <<<LIS
        <li>14 clases en video</li>
        <li>Entrenamiento personalisado gratis</li>
        <li>Una cuenta de 5000$ por entrenamiento</li>
        <li>Analisis diario desde su casa </li>
        <li>Obtenga acceso completo</li>
LIS;
        $submitValue = 'Comiense a comerciar hoy';
        $submitValueShort = 'Comience a negociar';
        $emailLabel = 'Email';
        $phoneLabel = 'Teléfono';
        $nameLabel = 'Nombre';
        $textArea = 'Sus preguntas / sugestión';
        $contactPageLabel = 'Contacto';
        $contactSubmit = 'Enviar';
        $WebsiteFooterText = $website_footer_txt_es;
	break;
    case 'fr': 
        $inpost_title = 'Obtenez gratuitement le guide PDF PLUS du forex:';
        $inpost_lis = <<<LIS
        <li>14 leçons en vidéo</li>
        <li>Cours d’apprentissage personnel gratuit</li>
        <li>Compte d’entrainement de 5000$.</li>
        <li>Analyses quotidiennes en direct.</li>
        <li>Obtenez un ACCES COMPLET .</li>
LIS;
        $submitValue = 'Commencez à trader dès aujourd’hui';
        $submitValueShort = 'Commencez à trader';
        $emailLabel = 'Email';
        $phoneLabel = 'Téléphone';
        $nameLabel = 'Nom';
        $textArea = 'Vos Questions / Suggestions';
        $contactPageLabel = 'Contact';
        $contactSubmit = 'Envoyer';
        $WebsiteFooterText = $website_footer_txt_fr;
    break;
    case 'ar': 
        $inpost_title = 'احصل على مرشد فوركس اضافي';
        $inpost_lis = <<<LIS
        <li>14 دروس بالفيديو</li>
        <li>تدريب 1X1 مجاني</li>
        <li>حساب تدريبي بقيمه 5000 $</li>
        <li>تحليل فني يومي </li>
        <li>احصل على ربط كامل لموقعنا </li>
LIS;
        $submitValue = 'ابداء بالتداول اليوم';
        $submitValueShort = 'بدء التداول'; 
        $emailLabel = 'ايميل';
        $phoneLabel = 'رقم الهاتف';
        $nameLabel = 'الاسم';
        $textArea = 'لديك أسئلة / اقتراحات';
        $contactPageLabel = 'اتصل';
        $contactSubmit = 'إرسال';
        $WebsiteFooterText = $website_footer_txt_ar;		  
    break;
    return;  
}
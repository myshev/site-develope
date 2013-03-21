<i>Подача заявки.</i>
<br/>
<br/>
<b>Имя:</b> <?=$obClient->getName();?>
<br/>
<b>E-mail:</b> <?=$obClient->getEmail() ? $obClient->getEmail() : 'Не указан' ;?>
<br/>
<b>Номер телефона:</b> <?=$obClient->getPhone() ? $obClient->getPhone() : 'Не указан' ;?>
<br/>
$value = $value;
$success = strlen($value) == 18;
if (!$success) {
    $validator->addError($key, 'Заполните телефон корректно');
}
return $success;
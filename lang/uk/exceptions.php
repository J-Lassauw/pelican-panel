<?php

return [
    'daemon_connection_failed' => 'Сталася помилка під час спроби зв’язку з Daemon, що призвело до відповіді HTTP/:code. Ця помилка була зафіксована.',
    'node' => [
        'servers_attached' => 'Вузол не може бути видалений, якщо до нього прив’язані сервери.',
        'error_connecting' => 'Помилка підключення до :node',
        'daemon_off_config_updated' => 'Конфігурація Daemon <strong>була оновлена</strong>, однак сталася помилка при спробі автоматичного оновлення конфігураційного файлу демона. Вам потрібно вручну оновити файл конфігурації (config.yml), щоб зміни набрали чинності.',
    ],
    'allocations' => [
        'server_using' => 'Цей ресурс уже використовується сервером. Видалення можливе лише після відключення сервера від нього.',
        'too_many_ports' => 'Додавання понад 1000 портів у одному діапазоні одночасно не підтримується.',
        'invalid_mapping' => 'Неправильне зіставлення для :port, неможливо обробити.',
        'cidr_out_of_range' => 'CIDR-нотація допускає маски тільки в діапазоні від /25 до /32.',
        'port_out_of_range' => 'Порти у виділенні повинні бути в діапазоні від 1024 до 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'Неможливо видалити яйце, до якого прив’язані активні сервери.',
        'invalid_copy_id' => 'Вибране яйце для копіювання скрипту не існує або саме копіює скрипт.',
        'has_children' => 'Це яйце є основою для одного або декількох інших яєць. Будь ласка, спочатку видаліть їх.',
    ],
    'variables' => [
        'env_not_unique' => 'Змінна середовища :name повинна бути унікальною для цього яйця.',
        'reserved_name' => 'Змінна середовища :name зарезервована та не може бути використана.',
        'bad_validation_rule' => 'Правило валідації ":rule" є некоректним для цього застосунку.',
    ],
    'importer' => [
        'json_error' => 'Сталася помилка під час обробки JSON-файлу: :error.',
        'file_error' => 'Наданий JSON-файл є некоректним.',
        'invalid_json_provided' => 'Наданий JSON-файл має некоректний формат.',
    ],
    'subusers' => [
        'editing_self' => 'Редагування власного субкористувацького облікового запису заборонено.',
        'user_is_owner' => 'Неможливо додати власника сервера як субкористувача.',
        'subuser_exists' => 'Користувач з цією електронною адресою вже є субкористувачем цього сервера.',
    ],
    'databases' => [
        'delete_has_databases' => 'Неможливо видалити сервер баз даних, якщо до нього підключені активні бази.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Максимальний інтервал для ланцюгового завдання – 15 хвилин.',
    ],
    'locations' => [
        'has_nodes' => 'Неможливо видалити локацію, якщо в ній є активні вузли.',
    ],
    'users' => [
        'is_self' => 'Неможливо видалити власний обліковий запис.',
        'has_servers' => 'Неможливо видалити користувача, у якого є активні сервери. Будь ласка, спочатку видаліть їх.',
        'node_revocation_failed' => 'Не вдалося відкликати ключі на <a href=":link">Вузлі #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Не знайдено жодного вузла, що відповідає критеріям автоматичного розгортання.',
        'no_viable_allocations' => 'Не знайдено жодного виділення, що відповідає критеріям автоматичного розгортання.',
    ],
    'api' => [
        'resource_not_found' => 'Запитуваний ресурс не існує на цьому сервері.',
    ],
    'mount' => [
        'servers_attached' => 'Неможливо видалити точку монтування, якщо до неї підключені сервери.',
    ],
    'server' => [
        'marked_as_failed' => 'Цей сервер ще не завершив процес встановлення. Будь ласка, спробуйте пізніше.',
    ],
];

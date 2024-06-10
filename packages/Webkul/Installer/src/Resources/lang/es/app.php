<?php

return [
    'seeders'   => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'Predeterminado',
            ],

            'attribute-groups'   => [
                'description'       => 'Descripción',
                'general'           => 'General',
                'inventories'       => 'Inventarios',
                'meta-description'  => 'Meta Descripción',
                'price'             => 'Precio',
                'settings'          => 'Configuraciones',
                'shipping'          => 'Envío',
            ],

            'attributes'         => [
                'brand'                => 'Marca',
                'color'                => 'Color',
                'cost'                 => 'Costo',
                'description'          => 'Descripción',
                'featured'             => 'Destacado',
                'guest-checkout'       => 'Compra de Invitado',
                'height'               => 'Altura',
                'length'               => 'Longitud',
                'manage-stock'         => 'Gestionar Stock',
                'meta-description'     => 'Meta Descripción',
                'meta-keywords'        => 'Meta Palabras Clave',
                'meta-title'           => 'Meta Título',
                'name'                 => 'Nombre',
                'new'                  => 'Nuevo',
                'price'                => 'Precio',
                'product-number'       => 'Número de Producto',
                'short-description'    => 'Descripción Corta',
                'size'                 => 'Tamaño',
                'sku'                  => 'SKU',
                'special-price-from'   => 'Precio Especial Desde',
                'special-price-to'     => 'Precio Especial Hasta',
                'special-price'        => 'Precio Especial',
                'status'               => 'Estado',
                'tax-category'         => 'Categoría de Impuestos',
                'url-key'              => 'Clave de URL',
                'visible-individually' => 'Visible Individualmente',
                'weight'               => 'Peso',
                'width'                => 'Ancho',
            ],

            'attribute-options'  => [
                'black'  => 'Negro',
                'green'  => 'Verde',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Rojo',
                's'      => 'S',
                'white'  => 'Blanco',
                'xl'     => 'XL',
                'yellow' => 'Amarillo',
            ],
        ],

        'category'  => [
            'categories' => [
                'description' => 'Descripción de la Categoría Raíz',
                'name'        => 'Raíz',
            ],
        ],

        'cms'       => [
            'pages' => [
                'about-us'         => [
                    'content' => 'Contenido de la Página Acerca de Nosotros',
                    'title'   => 'Acerca de Nosotros',
                ],

                'contact-us'       => [
                    'content' => 'Contenido de la Página Contáctenos',
                    'title'   => 'Contáctenos',
                ],

                'customer-service' => [
                    'content' => 'Contenido de la Página Servicio al Cliente',
                    'title'   => 'Servicio al Cliente',
                ],

                'payment-policy'   => [
                    'content' => 'Contenido de la Página Política de Pago',
                    'title'   => 'Política de Pago',
                ],

                'privacy-policy'   => [
                    'content' => 'Contenido de la Página Política de Privacidad',
                    'title'   => 'Política de Privacidad',
                ],

                'refund-policy'    => [
                    'content' => 'Contenido de la Página Política de Devolución',
                    'title'   => 'Política de Devolución',
                ],

                'return-policy'    => [
                    'content' => 'Contenido de la Página Política de Retorno',
                    'title'   => 'Política de Retorno',
                ],

                'shipping-policy'  => [
                    'content' => 'Contenido de la Página Política de Envío',
                    'title'   => 'Política de Envío',
                ],

                'terms-conditions' => [
                    'content' => 'Contenido de la Página Términos y Condiciones',
                    'title'   => 'Términos y Condiciones',
                ],

                'terms-of-use'     => [
                    'content' => 'Contenido de la Página Términos de Uso',
                    'title'   => 'Términos de Uso',
                ],

                'whats-new'        => [
                    'content' => 'Contenido de la Página Novedades',
                    'title'   => 'Novedades',
                ],
            ],
        ],

        'core'      => [
            'channels'   => [
                'meta-description' => 'Bienvenidos a la Tienda Online AndressaPy',
                'meta-keywords'    => 'Bienvenidos a la Tienda Online AndressaPy',
                'meta-title'       => 'AndressaPy',
                'name'             => 'Predeterminado',
            ],

            'currencies' => [
                'AED' => 'Dirham',
                'AFN' => 'Shekel Israelí',
                'CNY' => 'Yuan Chino',
                'EUR' => 'EURO',
                'GBP' => 'Libra Esterlina',
                'INR' => 'Rupia India',
                'IRR' => 'Rial Iraní',
                'JPY' => 'Yen Japonés',
                'RUB' => 'Rublo Ruso',
                'SAR' => 'Riyal Saudí',
                'TRY' => 'Lira Turca',
                'UAH' => 'Grivna Ucraniana',
                'USD' => 'Dólar Estadounidense',
            ],

            'locales'    => [
                'ar'    => 'Árabe',
                'bn'    => 'Bengalí',
                'de'    => 'Alemán',
                'en'    => 'Inglés',
                'es'    => 'Español',
                'fa'    => 'Persa',
                'fr'    => 'Francés',
                'he'    => 'Hebreo',
                'hi_IN' => 'Hindi',
                'it'    => 'Italiano',
                'ja'    => 'Japonés',
                'nl'    => 'Holandés',
                'pl'    => 'Polaco',
                'pt_BR' => 'Portugués Brasileño',
                'ru'    => 'Ruso',
                'sin'   => 'Cingalés',
                'tr'    => 'Turco',
                'uk'    => 'Ucraniano',
                'zh_CN' => 'Chino',
            ],
        ],

        'customer'  => [
            'customer-groups' => [
                'general'   => 'General',
                'guest'     => 'Invitado',
                'wholesale' => 'Mayorista',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'Default',
            ],
        ],

        'shop'      => [
            'theme-customizations' => [
                'all-products'           => [
                    'name'    => 'All Products',

                    'options' => [
                        'title' => 'Todos',
                    ],
                ],

                'bold-collections'       => [
                    'content' => [
                        'btn-title'   => 'Mostrar Todo',
                        'description' => '¡Presentamos nuestras nuevas colecciones! Eleva tu estilo con diseños atrevidos y declaraciones vibrantes. Explora patrones llamativos y colores que redefinen tu guardarropa. ¡Prepárate para abrazar lo extraordinario!',
                        'title'       => '¡Prepárate para nuestras nuevas colecciones!',
                    ],

                    'name'    => 'Bold Collections',
                ],

                'categories-collections' => [
                    'name' => 'Categories Collections',
                ],

                'footer-links'           => [
                    'name'    => 'Footer Links',

                    'options' => [
                            'about-us'         => 'Sobre nosotros',
                            'contact-us'       => 'Contáctanos',
                            'customer-service' => 'Servicio al cliente',
                            'payment-policy'   => 'Política de pagos',
                            'privacy-policy'   => 'Política de privacidad',
                            'refund-policy'    => 'Política de reembolso',
                            'return-policy'    => 'Política de devoluciones',
                            'shipping-policy'  => 'Política de envíos',
                            'terms-conditions' => 'Términos y condiciones',
                            'terms-of-use'     => 'Términos de uso',
                            'whats-new'        => 'Novedades',

                    ],
                ],

                'featured-collections'   => [
                    'name'    => 'Featured Collections',

                    'options' => [
                        'title' => 'Productos Destacados',
                    ],
                ],

                'game-container'         => [
                    'content' => [
                        'sub-title-1' => 'Nuestra Colección',
                        'sub-title-2' => 'Nuestra Colección',
                        'title'       => '¡Nuestras nuevas incorporaciones!',
                    ],

                    'name'    => 'Game Container',
                ],

                'image-carousel'         => [
                    'name'    => 'Image Carousel',

                    'sliders' => [
                        'title' => 'Get Ready For New Collection',
                    ],
                ],

                'new-products'           => [
                    'name'    => 'New Products',

                    'options' => [
                        'title' => 'Productos Nuevos',
                    ],
                ],

                'offer-information'      => [
                    'content' => [
                        'title' => 'Obtenga HASTA 20 % de descuento en su primer pedido COMPRAR AHORA',
                    ],

                    'name'    => 'Offer Information',
                ],

                'services-content'       => [
                    'name'  => 'Dienstleistungen Inhalt',

                    'title' => [
                        'emi-available'   => 'EMI disponible',
                        'free-shipping'   => 'Envío gratuito',
                        'product-replace' => 'Reemplazo de producto',
                        'time-support'    => 'Soporte 24/7',

                    ],

                    'description' => [
                        'free-shipping-info'   => 'Envío gratuito en todos los pedidos',
                        'product-replace-info' => '¡Reemplazo de producto fácil disponible!',
                        'emi-available-info'   => 'EMI sin costo disponible en todas las tarjetas de crédito principales',
                        'time-support-info'    => 'Soporte dedicado 24/7 por chat y correo electrónico',
                    ],

                ],

                'top-collections'        => [
                    'content' => [
                        'sub-title-1' => 'Nuestra Colección',
                        'sub-title-2' => 'Nuestra Colección',
                        'sub-title-3' => 'Nuestra Colección',
                        'sub-title-4' => 'Nuestra Colección',
                        'sub-title-5' => 'Nuestra Colección',
                        'sub-title-6' => 'Nuestra Colección',
                        'title'       => '¡Nuestras nuevas incorporaciones!',
                    ],

                    'name'    => 'Top Collections',
                ],
            ],
        ],

        'user'      => [
            'roles' => [
                'description' => 'Este rol tendrá acceso completo',

                'name'        => 'Administrator',
            ],

            'users' => [
                'name' => 'Example',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator'      => [
                'admin'            => 'Administrador',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Confirmar contraseña',
                'email-address'    => 'admin@example.com',
                'email'            => 'Correo electrónico',
                'password'         => 'Contraseña',
                'title'            => 'Crear administrador',
            ],

            'environment-configuration' => [
                'allowed-currencies'  => 'Monedas permitidas',
                'allowed-locales'     => 'Idiomas permitidos',
                'application-name'    => 'Nombre de la aplicación',
                'bagisto'             => 'Bagisto',
                'chinese-yuan'        => 'Yuan chino (CNY)',
                'database-connection' => 'Conexión de base de datos',
                'database-hostname'   => 'Nombre de host de la base de datos',
                'database-name'       => 'Nombre de la base de datos',
                'database-password'   => 'Contraseña de la base de datos',
                'database-port'       => 'Puerto de la base de datos',
                'database-prefix'     => 'Prefijo de la base de datos',
                'database-username'   => 'Nombre de usuario de la base de datos',
                'default-currency'    => 'Moneda predeterminada',
                'default-locale'      => 'Configuración regional predeterminada',
                'default-timezone'    => 'Zona horaria predeterminada',
                'default-url-link'    => 'https://localhost',
                'default-url'         => 'URL predeterminada',
                'dirham'              => 'Dirham (AED)',
                'euro'                => 'Euro (EUR)',
                'iranian'             => 'Rial iraní (IRR)',
                'israeli'             => 'Shekel israelí (AFN)',
                'japanese-yen'        => 'Yen japonés (JPY)',
                'mysql'               => 'Mysql',
                'pgsql'               => 'pgSQL',
                'pound'               => 'Libra esterlina (GBP)',
                'rupee'               => 'Rupia india (INR)',
                'russian-ruble'       => 'Rublo ruso (RUB)',
                'saudi'               => 'Riyal saudí (SAR)',
                'select-timezone'     => 'Selecciona la zona horaria',
                'sqlsrv'              => 'SQLSRV',
                'title'               => 'Configuración del entorno',
                'turkish-lira'        => 'Lira turca (TRY)',
                'ukrainian-hryvnia'   => 'Grivna ucraniana (UAH)',
                'usd'                 => 'Dólar estadounidense (USD)',
                'warning-message'     => '¡Cuidado! La configuración de los idiomas del sistema predeterminados y la moneda predeterminada son permanentes y no se pueden cambiar nunca más.',
            ],

            'installation-processing'   => [
                'bagisto-info'     => 'Creando las tablas de la base de datos, esto puede tomar algunos momentos',
                'bagisto'          => 'Instalación de Bagisto',
                'title'            => 'Instalación',
            ],

            'installation-completed'    => [
                'admin-panel'                => 'Panel de administración',
                'bagisto-forums'             => 'Foro de Bagisto',
                'customer-panel'             => 'Panel de clientes',
                'explore-bagisto-extensions' => 'Explorar extensiones de Bagisto',
                'title-info'                 => 'Bagisto se ha instalado correctamente en su sistema.',
                'title'                      => 'Instalación completada',
            ],

            'ready-for-installation'    => [
                'create-databsae-table'   => 'Crear la tabla de la base de datos',
                'install-info-button'     => 'Haz clic en el botón de abajo para',
                'install-info'            => 'Bagisto para instalación',
                'install'                 => 'Instalación',
                'populate-database-table' => 'Rellenar las tablas de la base de datos',
                'start-installation'      => 'Iniciar instalación',
                'title'                   => 'Listo para la instalación',
            ],

            'start'                     => [
                'locale'        => 'Local',
                'main'          => 'Comienzo',
                'select-locale' => 'Seleccionar Local',
                'title'         => 'Tu instalación de Bagisto',
                'welcome-title' => 'Bienvenido a Bagisto 2.0.',
            ],

            'server-requirements'       => [
                'calendar'    => 'Calendario',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'Información del archivo',
                'filter'      => 'Filtro',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'Intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php-version' => '8.1 o superior',
                'php'         => 'PHP',
                'session'     => 'Sesión',
                'title'       => 'Requisitos del servidor',
                'tokenizer'   => 'Tokenizer',
                'xml'         => 'XML',
            ],

            'arabic'                    => 'Árabe',
            'bengali'                   => 'Bengalí',
            'bagisto-logo'              => 'Logo de Bagisto',
            'back'                      => 'Atrás',
            'bagisto-info'              => 'Un proyecto comunitario por',
            'bagisto'                   => 'Bagisto',
            'chinese'                   => 'Chino',
            'continue'                  => 'Continuar',
            'dutch'                     => 'Holandés',
            'english'                   => 'Inglés',
            'french'                    => 'Francés',
            'german'                    => 'Alemán',
            'hebrew'                    => 'Hebreo',
            'hindi'                     => 'Hindi',
            'installation-title'        => 'Bienvenido a la Instalación',
            'installation-info'         => '¡Nos alegra verte aquí!',
            'installation-description'  => 'La instalación de Bagisto generalmente implica varios pasos. Aquí hay un resumen  general del proceso de instalación para Bagisto:',
            'italian'                   => 'Italiano',
            'japanese'                  => 'Japonés',
            'persian'                   => 'Persa',
            'polish'                    => 'Polaco',
            'portuguese'                => 'Portugués brasileño',
            'russian'                   => 'Ruso',
            'spanish'                   => 'Español',
            'sinhala'                   => 'Cingalés',
            'skip'                      => 'Saltar',
            'save-configuration'        => 'Guardar configuración',
            'title'                     => 'Instalador de Bagisto',
            'turkish'                   => 'Turco',
            'ukrainian'                 => 'Ucraniano',
            'webkul'                    => 'Webkul',
        ],
    ],
];

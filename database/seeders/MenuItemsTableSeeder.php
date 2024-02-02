<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 17,
                'menu_id' => 3,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 43,
                'menu_id' => 3,
                'title' => 'Transportes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 2,
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.transports.index',
                'parameters' => 'null',
            ),
            2 => 
            array (
                'id' => 23,
                'menu_id' => 3,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 22,
                'menu_id' => 3,
                'title' => 'Parámetros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 71,
                'menu_id' => 3,
                'title' => 'Tracking',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.trackings.index',
                'parameters' => 'null',
            ),
            5 => 
            array (
                'id' => 72,
                'menu_id' => 3,
                'title' => 'Verificar pagos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paypal',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.det-bank-orders.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 59,
                'menu_id' => 3,
                'title' => 'Consultar',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-search',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2020-01-27 00:09:03',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            7 => 
            array (
                'id' => 53,
                'menu_id' => 3,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2020-01-26 22:00:34',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            8 => 
            array (
                'id' => 57,
                'menu_id' => 3,
                'title' => 'Configurar Productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2020-01-26 22:10:21',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            9 => 
            array (
                'id' => 54,
                'menu_id' => 3,
                'title' => 'Configurar Pagos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2020-01-26 22:03:56',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            10 => 
            array (
                'id' => 58,
                'menu_id' => 3,
                'title' => 'Configurar Despachos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2020-01-26 22:15:08',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => NULL,
                'parameters' => '',
            ),
            11 => 
            array (
                'id' => 25,
                'menu_id' => 3,
                'title' => 'Municipios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 7,
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.regions.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 24,
                'menu_id' => 3,
                'title' => 'Parroquias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 8,
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-04-29 15:22:32',
                'route' => 'voyager.cities.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 42,
                'menu_id' => 3,
                'title' => 'Marcas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-ticket',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 3,
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-04-29 15:22:36',
                'route' => 'voyager.brands.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 65,
                'menu_id' => 3,
                'title' => 'Productos de una orden',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-rum',
                'color' => '#000000',
                'parent_id' => 59,
                'order' => 2,
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-04-29 15:21:56',
                'route' => 'voyager.orders.index',
                'parameters' => 'null',
            ),
            15 => 
            array (
                'id' => 48,
                'menu_id' => 3,
                'title' => 'Sub categorías',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 5,
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.sub-categories.index',
                'parameters' => 'null',
            ),
            16 => 
            array (
                'id' => 61,
                'menu_id' => 3,
                'title' => 'Impuestos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-diamond',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 6,
                'created_at' => '2020-01-27 00:23:36',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.taxes.index',
                'parameters' => 'null',
            ),
            17 => 
            array (
                'id' => 62,
                'menu_id' => 3,
                'title' => 'Publicidades',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tv',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.advs.index',
                'parameters' => 'null',
            ),
            18 => 
            array (
                'id' => 70,
                'menu_id' => 3,
                'title' => 'Estatus del tracking',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-check-circle',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 3,
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.orders-status.index',
                'parameters' => 'null',
            ),
            19 => 
            array (
                'id' => 26,
                'menu_id' => 3,
                'title' => 'Estados',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 6,
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.states.index',
                'parameters' => 'null',
            ),
            20 => 
            array (
                'id' => 40,
                'menu_id' => 3,
                'title' => 'Tiendas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 5,
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.stores.index',
                'parameters' => 'null',
            ),
            21 => 
            array (
                'id' => 44,
                'menu_id' => 3,
                'title' => 'Embalajes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-umbrella',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 4,
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-04-29 15:22:31',
                'route' => 'voyager.packagings.index',
                'parameters' => 'null',
            ),
            22 => 
            array (
                'id' => 27,
                'menu_id' => 3,
                'title' => 'Categorías',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-folder',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 4,
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-04-29 15:22:36',
                'route' => 'voyager.categories.index',
                'parameters' => 'null',
            ),
            23 => 
            array (
                'id' => 63,
                'menu_id' => 3,
                'title' => 'Compra Fácil',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 2,
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-04-29 18:09:26',
                'route' => 'voyager.packages.index',
                'parameters' => 'null',
            ),
            24 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            25 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            26 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            27 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => NULL,
                'parameters' => NULL,
            ),
            28 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 10,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            29 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 11,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            30 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 12,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            31 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            32 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            33 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            34 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Principal',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-23 18:13:21',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            35 => 
            array (
                'id' => 12,
                'menu_id' => 2,
                'title' => 'Principal',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-home',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-01-23 18:24:32',
                'updated_at' => '2020-01-23 18:38:25',
                'route' => NULL,
                'parameters' => '',
            ),
            36 => 
            array (
                'id' => 51,
                'menu_id' => 3,
                'title' => 'Impuestos',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 55,
                'order' => 2,
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-26 22:16:47',
                'route' => 'voyager.taxes.index',
                'parameters' => NULL,
            ),
            37 => 
            array (
                'id' => 34,
                'menu_id' => 3,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 33,
                'order' => 1,
                'created_at' => '2020-01-24 12:34:16',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            38 => 
            array (
                'id' => 35,
                'menu_id' => 3,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 33,
                'order' => 2,
                'created_at' => '2020-01-24 12:34:16',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            39 => 
            array (
                'id' => 36,
                'menu_id' => 3,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 33,
                'order' => 3,
                'created_at' => '2020-01-24 12:34:16',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            40 => 
            array (
                'id' => 15,
                'menu_id' => 3,
                'title' => 'Cuentas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => 53,
                'order' => 1,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-26 22:01:53',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            41 => 
            array (
                'id' => 18,
                'menu_id' => 3,
                'title' => 'Diseñador de Menús',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 1,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            42 => 
            array (
                'id' => 19,
                'menu_id' => 3,
                'title' => 'Base de Datos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 2,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            43 => 
            array (
                'id' => 20,
                'menu_id' => 3,
                'title' => 'Compás',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 3,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            44 => 
            array (
                'id' => 21,
                'menu_id' => 3,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 4,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-24 20:58:47',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            45 => 
            array (
                'id' => 30,
                'menu_id' => 3,
                'title' => 'Escritorio',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-01-24 12:34:16',
                'updated_at' => '2020-01-27 00:36:46',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            46 => 
            array (
                'id' => 52,
                'menu_id' => 3,
                'title' => 'Pedidos',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 55,
                'order' => 1,
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-26 22:37:58',
                'route' => 'voyager.orders.index',
                'parameters' => 'null',
            ),
            47 => 
            array (
                'id' => 50,
                'menu_id' => 3,
                'title' => 'Datos bancarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 54,
                'order' => 1,
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-28 20:56:56',
                'route' => 'voyager.bank-datas.index',
                'parameters' => 'null',
            ),
            48 => 
            array (
                'id' => 46,
                'menu_id' => 3,
                'title' => 'Opiniones',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-star',
                'color' => '#000000',
                'parent_id' => 59,
                'order' => 1,
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-28 21:03:32',
                'route' => 'voyager.rating-products.index',
                'parameters' => 'null',
            ),
            49 => 
            array (
                'id' => 41,
                'menu_id' => 3,
                'title' => 'Métodos de pago',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-credit-cards',
                'color' => '#000000',
                'parent_id' => 54,
                'order' => 2,
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-28 21:05:12',
                'route' => 'voyager.payment-methods.index',
                'parameters' => 'null',
            ),
            50 => 
            array (
                'id' => 16,
                'menu_id' => 3,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-02-03 19:37:50',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            51 => 
            array (
                'id' => 14,
                'menu_id' => 3,
                'title' => 'Multimedia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-02-03 19:37:50',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            52 => 
            array (
                'id' => 73,
                'menu_id' => 3,
                'title' => 'Horarios para despachos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-alarm-clock',
                'color' => '#000000',
                'parent_id' => 58,
                'order' => 1,
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 15:45:38',
                'route' => 'voyager.calendars.index',
                'parameters' => 'null',
            ),
            53 => 
            array (
                'id' => 38,
                'menu_id' => 3,
                'title' => 'Datos personales',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => 53,
                'order' => 2,
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-04-14 20:34:23',
                'route' => 'voyager.peoples.index',
                'parameters' => 'null',
            ),
            54 => 
            array (
                'id' => 47,
                'menu_id' => 3,
                'title' => 'Productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => '#000000',
                'parent_id' => 57,
                'order' => 1,
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-04-14 14:27:39',
                'route' => 'voyager.products.index',
                'parameters' => 'null',
            ),
            55 => 
            array (
                'id' => 39,
                'menu_id' => 3,
                'title' => 'Monedas aceptadas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dollar',
                'color' => '#000000',
                'parent_id' => 54,
                'order' => 4,
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-04-14 20:34:19',
                'route' => 'voyager.coins.index',
                'parameters' => 'null',
            ),
            56 => 
            array (
                'id' => 45,
                'menu_id' => 3,
                'title' => 'Bancos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => '#000000',
                'parent_id' => 54,
                'order' => 3,
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-04-14 20:34:19',
                'route' => 'voyager.banks.index',
                'parameters' => 'null',
            ),
            57 => 
            array (
                'id' => 60,
                'menu_id' => 3,
                'title' => 'Ordenes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-basket',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-01-27 00:12:39',
                'updated_at' => '2020-04-29 15:21:15',
                'route' => 'voyager.orders.index',
                'parameters' => 'null',
            ),
            58 => 
            array (
                'id' => 64,
                'menu_id' => 3,
                'title' => 'Direcciones de usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => 53,
                'order' => 3,
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-04-29 15:21:24',
                'route' => 'voyager.order-address.index',
                'parameters' => 'null',
            ),
            59 => 
            array (
                'id' => 74,
                'menu_id' => 3,
                'title' => 'Paginas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-29 15:22:28',
                'route' => 'voyager.pages.index',
                'parameters' => 'null',
            ),
            60 => 
            array (
                'id' => 75,
                'menu_id' => 3,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2020-04-29 15:20:13',
                'updated_at' => '2020-04-29 15:22:28',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}
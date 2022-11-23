<?php


function get_header_menu()
{
    $menu = wp_get_nav_menu_object('menu_header');
    $menu_items = wp_get_nav_menu_items($menu);
    $categories = createTree($menu_items);
    $html = renderMenu($categories);
    return $html;
}

function createTree($arr): array
{
    $parents_arr = array();
    foreach ($arr as $key => $item) {
        $parents_arr[$item->menu_item_parent][$item->ID] = $item;
    }
    $treeElem = $parents_arr[0];
    generateElemTree($treeElem, $parents_arr);

    return $treeElem;
}

function generateElemTree(&$treeElem, $parents_arr): void
{
    foreach ($treeElem as $key => $item) {
        if (!isset($item->children)) {
            $item->children = array();
        }
        if (array_key_exists($key, $parents_arr)) {
            $item->children = $parents_arr[$key];
            generateElemTree($item->children, $parents_arr);
        }
    }
}

function renderMenu(&$categories): string
{
    $html = '<nav class="header-menu "><ul class="header__ul">';

    foreach ($categories as $category) {
        if ($category->menu_item_parent == 0) {
            $html .= '<li data-main-category-id="' . $category->ID . '" class="header-menu__lvl0"><a href="' . $category->url . '">' . $category->title . '</a></li>';
        }
        if (!empty($category->children)) {
            renderSubMenu($category->children, $category->ID, $html, true);
        }
    }
    $html .= '</ul></nav>';
    return $html;
}

function renderSubMenu(&$categories, &$parent_id, &$html, $submain_menu = false): void
{
    $ul = '<ul class="sub-menu sub-menu_submain">';
    if ($submain_menu) {
        $ul = '<ul data-submain-category-id="' . $parent_id . '" class="sub-menu __submenu-main sub-menu_main">';
    }
    $html .= $ul;

    foreach ($categories as $category) {
        if ($parent_id != $category->ID) {
            $html .= '<li class="sub-menu__item"><a href="' . $category->url . '">' . $category->title . '</a>';
            if (!empty($category->children)) {
                $html .= '<div class="sub-menu__plus"><div></div><div></div></div>';
                renderSubMenu($category->children, $category->ID, $html);
            }
            $html .= '</li>';
        }
    }
    $html .= '</ul>';

}
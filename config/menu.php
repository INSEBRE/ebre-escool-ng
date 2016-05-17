<?php

use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});

Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu');
});

Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('main', function () {
    return Menu::adminlteMenu()//->addIfCan($authorization, Item $item)
        ->add(Link::to('/roll_class', 'Passar llista'))->addClass('fa-bell-o')
        ->add(
            Menu::adminlteSubmenu('Tutoria')
                ->add(Link::to('/fouls_during_consultation', 'Consulta faltes Pendents'))->addClass('treeview-menu')
                ->add(Link::to('/mentoring_class_lists', 'Llistes de Classe'))
                ->add(Link::to('/mentoring_groups', 'Tutoritzar els teus Grups'))
                ->add(Link::to('/mentoring_attendendance_by_student', 'Llista de faltes per Alumne'))
        )
        ->add(
            Menu::adminlteSubmenu('Horaris')
                ->add(Link::to('/my_time_tables', 'Els meus horaris'))->addClass('treeview-menu')
                ->add(Link::to('/all_teachers_time_tables', 'Horaris de tots el Professors'))
                ->add(Link::to('/all_groups_time_tables', 'Tots els horaris de Grups'))
        )
        ->add(
            Menu::adminlteSubmenu('Matrícula')
                ->add(Link::to('/wizard_plate', 'Matrícula'))->addClass('treeview-menu')
                ->add(Link::to('/wizard_without_modify_person_and_user_data', 'Matrícula Sense Modificació - <br>de dades Personals ni Password'))
                ->add(Link::to('/enrollment_query_by_person', 'Consulta Matrícula'))
                ->add(Link::to('/enrollment_modify', 'Modificació de Matrícula'))
                ->add(Link::to('/change_classroom_group', 'Canvi de Grup'))
                ->add(Link::to('/enrollment_delete', 'Consulta Matrícula'))
                ->add(Link::to('/enrollment_modify_person', 'Modificar dades Personals'))
                ->add(Link::to('/delete_person', 'Eliminar Persona'))
        )
        ->add(
            Menu::adminlteSubmenu('Informes')
                ->add(Link::to('/general_sheet', 'Llençol general del centre'))->addClass('treeview-menu')
                ->add(Menu::adminlteSubmenu('Professors')
                    ->add(Link::to('/teacher_sheet', 'Llençol de Professors'))
                    ->add(Link::to('/report_teacher_list', 'Llista de Professors'))
                    ->add(Link::to('/tutors_report_group', 'Tutors de Grup'))
                    ->add(Link::to('/delete_person', 'Eliminar Persona')))
                ->add(Menu::adminlteSubmenu('Alumnes')
                    ->add(Link::to('/class_list_report', 'Llista de Classe'))
                    ->add(Link::to('/class_sheet_report', 'Llençol d\'estudiants d\'un Grup'))
                    ->add(Link::to('/mailing_list_report', 'Correus dels Estudiants'))
                    ->add(Link::to('/delete_person', 'Eliminar Persona')))
                ->add(Menu::adminlteSubmenu('Currículum')
                    ->add(Link::to('/curriculum_report_departaments', 'Departaments'))
                    ->add(Link::to('/curriculum_reports_study', 'Estudis'))
                    ->add(Link::to('/curriuclum_reports_course', 'Curs'))
                    ->add(Link::to('/curriculum_reports_classgroup', 'Grups de Classe'))
                    ->add(Link::to('/curriuclum_reports_studymodules', 'Mòduls Professionals'))
                    ->add(Link::to('/curriculum_reports_lessons', 'Unitats Formamtives')))
                ->add(Menu::adminlteSubmenu('Matrícula')
                    ->add(Link::to('/enrollment_reports_by_academic_period', 'Matrícula per Períodes - <br> Acadèmics'))
                    ->add(Link::to('/enrollment_reports_by_studies', 'Matrícula per Estudis'))
                    ->add(Link::to('/enrollment_reports_all_enrolled_persons_by_academic_period', 'Tots els Matriculats per - <br> Període Acadèmic')))
        )
        ->add(Link::to('/inventory', 'Inventari'))->addClass('fa-bell-o')
        ->add(
            Menu::adminlteSubmenu('Manteniments')
                ->add(Menu::adminlteSubmenu('Persones')
                    ->add(Link::to('/persons', 'Persones'))
                    ->add(Link::to('/teachers', 'Professors'))
                    ->add(Link::to('/teachers_by_academic_period', 'Professors per Període Acadèmic'))
                    ->add(Link::to('/students', 'Alumnes'))
                    ->add(Link::to('/person_official_id_type', 'Tipus Identificador Personal'))
                    ->add(Link::to('/localities', 'Poblacions'))
                    ->add(Link::to('/states', 'Províncies'))
                    ->add(Link::to('/organizational_unit', 'Unitats Organitzatives'))
                    ->add(Link::to('/locations', 'Espais')))
                ->add(Menu::adminlteSubmenu('Pla d\'estudis')
                    ->add(Link::to('/academic_periods', 'Períodes Acadèmics'))
                    ->add(Link::to('/studies_organizational_unit', 'Unitat Organitzativa d\'Estudis'))
                    ->add(Link::to('/departaments', 'Departaments/Famílies'))
                    ->add(Link::to('/studies', 'Estudis'))
                    ->add(Link::to('/studieslaw', 'Lleis'))
                    ->add(Link::to('/cycle', 'Cicle'))
                    ->add(Link::to('/course', 'Curs'))
                    ->add(Link::to('/classroom_group', 'Grup de Classe (tots)'))
                    ->add(Link::to('/classroom_group_by_academic_period', 'Grups de Classe per Anys'))
                    ->add(Link::to('/study_module', 'Mòdul Professional'))
                    ->add(Link::to('/study_module_academic_periods', 'MPs per Període'))
                    ->add(Link::to('/sudy_module_type', 'Tipus Mòdul Professional'))
                    ->add(Link::to('/study_module_subtype', 'Subtipus Mòdul Professional'))
                    ->add(Link::to('/study_submodules', 'Unitat Formativa'))
                    ->add(Link::to('/study_submodules_academic_periods', 'UFs per Període'))
                    ->add(Link::to('/lessons', 'Lliçons')))
                ->add(Menu::adminlteSubmenu('Matrícula')
                    ->add(Link::to('/enrollment', 'Matrícula'))
                    ->add(Link::to('/enrollment_submodules', 'Matrícula Unitats Formatives')))
                ->add(Menu::adminlteSubmenu('Assistència')
                    ->add(Link::to('/incident', 'Incidències assistència'))
                    ->add(Link::to('/incident_type', 'Tipus d\'Incidencies d\'Assistencia'))
                    ->add(Link::to('/time_slots', 'Franjes Horàries'))
                    ->add(Link::to('/hiddent_students', 'Estudiants_ocults')))
                ->add(Menu::adminlteSubmenu('Horaris')
                    ->add(Link::to('/non_lective_hours', 'Hores no lectives'))
                    ->add(Link::to('/non_lective_lessons', 'Lliçons no lectives'))
                    ->add(Link::to('/shift', 'Torn')))
                ->add(Menu::adminlteSubmenu('Inventari')
                    ->add(Link::to('/external_id_type', 'Tipus Identificadors externs'))
                    ->add(Link::to('/material_type', 'Tipus Material'))
                    ->add(Link::to('/brand', 'Marques'))
                    ->add(Link::to('/model', 'Models'))
                    ->add(Link::to('/provider', 'Proveïdors'))
                    ->add(Link::to('/money_source', 'Origen Diners')))
        )
        ->add(
            Menu::adminlteSubmenu('Gestió')
                ->add(Link::to('/persons', 'Persones'))->addClass('treeview-menu')
                ->add(Link::to('/users', 'Usuaris'))
                ->add(Link::to('/users_gc', 'Usuaris GC'))
                ->add(Link::to('/users_google_apps', 'Usuaris Google Apps'))
                ->add(Link::to('/users_ldap', 'Usuaris Ldap'))
                ->add(Link::to('/change_password', 'Canvi Password'))
                ->add(Link::to('/create_initial_password', 'Crear Password Inicial'))
                ->add(Link::to('/groups', 'Grups'))
                ->add(Link::to('/massive_change_password', 'Canvi Massiu de Paraules de Pas'))
        )
        ->setActiveFromRequest();
});



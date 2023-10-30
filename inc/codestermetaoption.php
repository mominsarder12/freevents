<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

  //
  // Set a unique slug-like ID
  $fv_s_prefix = 'fv_schedule_options';

  //
  // Create a metabox
  CSF::createMetabox(
    $fv_s_prefix,
    array(
      'title'     => 'My Schedule Options',
      'post_type' => 'schedule',
      'data_type' => 'unsterilized'
    )
  );

  //
  // Create a section
  CSF::createSection($fv_s_prefix, array(

    'fields' => array(
      //   date picker
      array(
        'id'    => 'opt-date-1',
        'type'  => 'date',
        'title' => 'Date',
      ),

      //start time picker
      array(
        'id'       => 'opt-datetime-5',
        'type'     => 'datetime',
        'title'    => 'Start Time',
        'settings' => array(
          'noCalendar' => true,
          'enableTime' => true,
        )
      ),
      //End time picker
      array(

        'id'       => 'opt-datetime-6',
        'type'     => 'datetime',
        'title'    => 'End Time',
        'settings' => array(
          'noCalendar' => true,
          'enableTime' => true,
        )

      ),
      //speakers 
      array(
        'id'       => 'speakers-select-1',
        'type'     => 'group',
        'title'    => 'Speakers',
        'fields'   => array(
          array(
            'id'      => 'speaker-1',
            'type'     => 'select',
            'title'   => 'Speaker',
            'options' => 'post',
            'query_args' => array(
              'post_type' => 'speaker',
              'post_per_page' => -1,

            ),
          ),

        ),
      ),
      // materials
      array(
        'id'       => 'schedule_materials',
        'type'     => 'group',
        'title'    => 'Materials group',
        'fields'   => array(
          array(
            'id'      => 'material_title',
            'type'     => 'text',
            'title'   => 'Material Title',

          ),
          array(
            'id'      => 'material_thumbnail',
            'type'     => 'media',
            'title'   => 'Material Thumbnail',
          ),
          array(
            'id'      => 'material_description',
            'type'     => 'textarea',
            'title'   => 'Material Description',
          ),
          array(
            'id'      => 'material_links',
            'type'     => 'link',
            'title'   => 'Related Links',
          ),
        )

      ),
      
    )
  ));



  // Set a unique slug-like ID
  $fv_p_prefix = 'fv_person_options';
  // Create a metabox
  CSF::createMetabox(
    $fv_p_prefix,
    array(
      'title'     => 'Person Options',
      'post_type' => 'person',
      'data_type' => 'unsterilized'
    )
  );

  //
  // Create a section
  CSF::createSection($fv_p_prefix, array(
    'fields' => array(
      array(
        'id'    => 'person_role',
        'type'  => 'select',
        'title' => 'Person Role',
        'options' => array(
          'guest' => 'Guest',
          'organizer' => 'Organizer',
          'volunteer' => 'Volunteer',
          'speaker'   => 'Speaker',
        )
      ),
    )
     
  ));

  // Set a unique slug-like ID
  $fv_person_speaker_prefix = 'fv_person_speaker_options';
  // Create a metabox
  CSF::createMetabox(
    $fv_person_speaker_prefix,
    array(
      'title'     => 'Social Options',
      'post_type' => array('person','speaker'),
      'data_type' => 'unsterilized'
    )
  );

  //
  // Create a section
  CSF::createSection($fv_person_speaker_prefix, array(
    'fields' => array(
      array(
        'id'       => 'social_profile',
        'type'     => 'group',
        'title'    => 'Social Profile',
        'fields'   => array(
          array(
            'id'      => 'social_icon',
            'type'     => 'icon',
            'title'   => 'Icon',
          ),
          array(
            'id'      => 'social_link',
            'type'     => 'link',
            'title'   => 'Social Link',
          ),

        ),
      ),
    )
     
  ));
}



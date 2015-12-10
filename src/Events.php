<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class Events
{
    /**
     * The PRE_SAVE event occurs when the user is saved.
     */
    const PRE_SAVE = 'xidea_user.user.pre_save';
    
    /**
     * The POST_SAVE event occurs when the user is saved.
     */
    const POST_SAVE = 'xidea_user.user.post_save';
    
    /**
     * The CREATE_INITIALIZE event occurs when the create process is initialized.
     */
    const CREATE_INITIALIZE = 'xidea_user.user.create_initialize';
    
    /**
     * The PRE_CREATE event occurs when the create process is initialized.
     */
    const PRE_CREATE = 'xidea_user.user.pre_create';
    
    /**
     * The CREATE_SUCCESS event occurs when the create process is initialized.
     */
    const CREATE_SUCCESS = 'xidea_user.user.create_success';
    
    /**
     * The CREATE_FORM_VALID event occurs when the create process is initialized.
     */
    const CREATE_FORM_VALID = 'xidea_user.user.create_form_valid';
    
    /**
     * The CREATE_COMPLETED event occurs when the create process is initialized.
     */
    const CREATE_COMPLETED = 'xidea_user.user.create_completed';
    
    /**
     * The CHANGE_PASSWORD_INITIALIZE event occurs when the create process is initialized.
     */
    const CHANGE_PASSWORD_INITIALIZE = 'xidea_user.user.change_password_initialize';
    
    /**
     * The CHANGE_PASSWORD_SUCCESS event occurs when the create process is initialized.
     */
    const CHANGE_PASSWORD_SUCCESS = 'xidea_user.user.change_password_success';
    
    /**
     * The CHANGE_PASSWORD_FORM_VALID event occurs when the create process is initialized.
     */
    const CHANGE_PASSWORD_FORM_VALID = 'xidea_user.user.change_password_form_valid';
    
    /**
     * The CHANGE_PASSWORD_COMPLETED event occurs when the create process is initialized.
     */
    const CHANGE_PASSWORD_COMPLETED = 'xidea_user.user.change_password_completed';
}

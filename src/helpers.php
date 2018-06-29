<?php

use Secomapp\GetResponse\Facades\GetResponse as GetResponse;

if (!function_exists('getresponse_accounts')) {

    /**
     * Get account details
     *
     * @return mixed
     */
    function getresponse_accounts()
    {
        return GetResponse::accounts();
    }
}

if (!function_exists('getresponse_ping')) {

    /**
     * @return mixed
     */
    function getresponse_ping()
    {
        return getresponse_accounts();
    }
}

if (!function_exists('getresponse_get_campaigns')) {

    /**
     * Get all campaigns
     *
     * @return mixed
     */
    function getresponse_get_campaigns()
    {
        return GetResponse::getCampaigns();
    }
}

if (!function_exists('getresponse_get_campaign')) {

    /**
     * Get details of a campaign with given campaign ID
     *
     * @param int $campaign_id
     * @return mixed
     */
    function getresponse_get_campaign($campaign_id)
    {
        return GetResponse::getCampaign($campaign_id);
    }
}

if (!function_exists('getresponse_create_campaign')) {

    /**
     * Create new campaign with given information
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_create_campaign($params)
    {
        return GetResponse::createCampaign($params);
    }
}

if (!function_exists('getresponse_get_rss_newsletters')) {

    /**
     * List all RSS newsletters
     */
    function getresponse_get_rss_newsletters()
    {
        GetResponse::getRSSNewsletters();
    }
}

if (!function_exists('getresponse_send_newsletter')) {

    /**
     * Send one newsletter
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_send_newsletter($params)
    {
        return GetResponse::sendNewsletter($params);
    }
}

if (!function_exists('getresponse_send_draft_newsletter')) {

    /**
     * Send one draft newsletter
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_send_draft_newsletter($params)
    {
        return GetResponse::sendDraftNewsletter($params);
    }
}

if (!function_exists('getresponse_add_contact')) {

    /**
     * Add single contact into your campaign
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_add_contact($params)
    {
        return GetResponse::addContact($params);
    }
}

if (!function_exists('getresponse_get_contact')) {

    /**
     * Retrieving contact by id
     *
     * @param string $contact_id contact id obtained by API
     * @return mixed
     */
    function getresponse_get_contact($contact_id)
    {
        return GetResponse::getContact($contact_id);
    }
}

if (!function_exists('getresponse_search_contacts')) {

    /**
     * Search contacts
     *
     * @param array|null $params
     * @return mixed
     */
    function getresponse_search_contacts($params = null)
    {
        return GetResponse::searchContacts($params);
    }
}

if (!function_exists('getresponse_get_contacts_search')) {

    /**
     * Retrieve segment
     *
     * @param int $id
     * @return mixed
     */
    function getresponse_get_contacts_search($id)
    {
        return GetResponse::getContactsSearch($id);
    }
}

if (!function_exists('getresponse_add_contacts_search')) {

    /**
     * Add contacts search
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_add_contacts_search($params)
    {
        return GetResponse::addContactsSearch($params);
    }
}

if (!function_exists('getresponse_delete_contacts_search')) {

    /**
     * Delete contacts search
     *
     * @param int $id
     * @return mixed
     */
    function getresponse_delete_contacts_search($id)
    {
        return GetResponse::deleteContactsSearch($id);
    }
}

if (!function_exists('getresponse_get_contact_activities')) {

    /**
     * Get contact activities
     *
     * @param int $contact_id
     * @return mixed
     */
    function getresponse_get_contact_activities($contact_id)
    {
        return GetResponse::getContactActivities($contact_id);
    }
}

if (!function_exists('getresponse_get_contacts')) {

    /**
     * Retrieving contact by params
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_get_contacts($params = [])
    {
        return GetResponse::getContacts($params);
    }
}

if (!function_exists('getresponse_update_contact')) {

    /**
     * Updating any fields of your subscriber
     *
     * @param int $contact_id
     * @param array $params
     * @return mixed
     */
    function getresponse_update_contact($contact_id, $params = [])
    {
        return GetResponse::updateContact($contact_id, $params);
    }
}

if (!function_exists('getresponse_delete_contact')) {

    /**
     * Drop single user by ID
     *
     * @param int $contact_id
     * @return mixed
     */
    function getresponse_delete_contact($contact_id)
    {
        return GetResponse::deleteContact($contact_id);
    }
}

if (!function_exists('getresponse_get_custom_fields')) {

    /**
     * Retrieve account custom fields
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_get_custom_fields($params = [])
    {
        return GetResponse::getCustomFields($params);
    }
}

if (!function_exists('getresponse_set_custom_fields')) {

    /**
     * Add custom field
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_set_custom_field($params)
    {
        return GetResponse::setCustomField($params);
    }
}

if (!function_exists('getresponse_get_custom_field')) {

    /**
     * Retrieve single custom field
     *
     * @param string $custom_id
     * @return mixed
     */
    function getresponse_get_custom_field($custom_id)
    {
        return GetResponse::getCustomField($custom_id);
    }
}

if (!function_exists('getresponse_get_billing')) {

    /**
     * Retrieving billing information
     *
     * @return mixed
     */
    function getresponse_get_billing()
    {
        return GetResponse::getBillingInfo();
    }
}

if (!function_exists('getresponse_get_web_form')) {

    /**
     * Get single form information
     *
     * @param int $form_id
     * @return mixed
     */
    function getresponse_get_web_form($form_id)
    {
        return GetResponse::getWebForm($form_id);
    }
}

if (!function_exists('getresponse_get_web_forms')) {

    /**
     * Get all web forms with $params
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_get_web_forms($params = [])
    {
        return GetResponse::getWebForms($params);
    }
}

if (!function_exists('getresponse_get_form')) {

    /**
     * Get information of form with ID
     *
     * @param int $form_id
     * @return mixed
     */
    function getresponse_get_form($form_id)
    {
        return GetResponse::getForm($form_id);
    }
}

if (!function_exists('getresponse_get_forms')) {

    /**
     * Get all forms with given $params
     *
     * @param array $params
     * @return mixed
     */
    function getresponse_get_forms($params = [])
    {
        return GetResponse::getForms($params);
    }
}
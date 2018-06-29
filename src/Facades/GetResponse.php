<?php

namespace Secomapp\GetResponse\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed getBillingInfo()
 * @method static mixed accounts()
 * @method static mixed getCampaigns()
 * @method static mixed getCampaign($campaign_id)
 * @method static mixed createCampaign($params)
 * @method static mixed getWebForm($form_id)
 * @method static mixed getForms($params = [])
 * @method static mixed getForm($form_id)
 * @method static mixed getWebForms($params = [])
 * @method static mixed sendNewsletter($params)
 * @method static mixed sendDraftNewsletter($params)
 * @method static mixed addContact($params)
 * @method static mixed getContact($contact_id)
 * @method static mixed searchContacts($params)
 * @method static mixed getContactsSearch($id)
 * @method static mixed addContactsSearch($params)
 * @method static mixed deleteContactsSearch($id)
 * @method static mixed getContactActivities($contact_id)
 * @method static mixed getContacts($params)
 * @method static mixed updateContact($contact_id, $params)
 * @method static mixed deleteContact($contact_id)
 * @method static mixed getCustomFields($params)
 * @method static mixed setCustomField($params)
 * @method static mixed getCustomField($custom_id)
 * @method static getRSSNewsletters()
 */
class GetResponse extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return \Secomapp\GetResponse\GetResponse::class;
    }
}
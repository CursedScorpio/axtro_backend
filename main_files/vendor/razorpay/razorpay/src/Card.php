<<<<<<< HEAD
<?php

namespace Razorpay\Api;

class Card extends Entity
{
    /**
     * @param $id Card id
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function requestCardReference($attributes = array())
    {
        $entityUrl = $this->getEntityUrl() . '/fingerprints';

        return $this->request('POST', $entityUrl, $attributes);
    }
}
=======
<?php

namespace Razorpay\Api;

class Card extends Entity
{
    /**
     * @param $id Card id
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function requestCardReference($attributes = array())
    {
        $entityUrl = $this->getEntityUrl() . '/fingerprints';

        return $this->request('POST', $entityUrl, $attributes);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)

<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of AddSynonym
 *
 * @method string getSynonym()
 * @method string getCoreWordName()
 */
class AddSynonymRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Chatbot',
            '2017-10-11',
            'AddSynonym',
            'beebot'
        );
    }

    /**
     * @param string $synonym
     *
     * @return $this
     */
    public function setSynonym($synonym)
    {
        $this->requestParameters['Synonym'] = $synonym;
        $this->queryParameters['Synonym'] = $synonym;

        return $this;
    }

    /**
     * @param string $coreWordName
     *
     * @return $this
     */
    public function setCoreWordName($coreWordName)
    {
        $this->requestParameters['CoreWordName'] = $coreWordName;
        $this->queryParameters['CoreWordName'] = $coreWordName;

        return $this;
    }
}

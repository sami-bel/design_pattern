<?php

namespace Structural\Composite;

class TransformerComposite
{
    /**
     * @var TransformerComponent[] $transformers
     */
    private array $transformers;
    /**
     * TransformerComposite constructor.
     * @param TransformerComponent[] $transformers
     */
    public function __construct(array $transformers)
    {
        foreach ($transformers as $transformer) {
            $this->addTransformer($transformer);
        }
    }

    public function transform(string $type): void
    {
       foreach ($this->transformers as $transformer) {
           $transformer->transform($type);
       }
    }

    private function addTransformer(TransformerComponent $transformer): void
    {
        $this->transformers[] = $transformer;
    }
}

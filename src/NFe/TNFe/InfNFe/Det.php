<?php

namespace NFePHP\NFe\NFe\TNFe\InfNFe;

/**
 * Class representing Det
 */
class Det
{

    /**
     * Número do item do NF
     *
     * @property string $nItem
     */
    private $nItem = null;

    /**
     * Dados dos produtos e serviços da NF-e
     *
     * @property \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Prod $prod
     */
    private $prod = null;

    /**
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @property \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Imposto $imposto
     */
    private $imposto = null;

    /**
     * @property \NFePHP\NFe\NFe\TNFe\InfNFe\Det\ImpostoDevol $impostoDevol
     */
    private $impostoDevol = null;

    /**
     * Informações adicionais do produto (norma referenciada, informações
     * complementares, etc)
     *
     * @property string $infAdProd
     */
    private $infAdProd = null;

    /**
     * Gets as nItem
     *
     * Número do item do NF
     *
     * @return string
     */
    public function getNItem()
    {
        return $this->nItem;
    }

    /**
     * Sets a new nItem
     *
     * Número do item do NF
     *
     * @param string $nItem
     * @return self
     */
    public function setNItem($nItem)
    {
        $this->nItem = $nItem;
        return $this;
    }

    /**
     * Gets as prod
     *
     * Dados dos produtos e serviços da NF-e
     *
     * @return \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Prod
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Sets a new prod
     *
     * Dados dos produtos e serviços da NF-e
     *
     * @param \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Prod $prod
     * @return self
     */
    public function setProd(\NFePHP\NFe\NFe\TNFe\InfNFe\Det\Prod $prod)
    {
        $this->prod = $prod;
        return $this;
    }

    /**
     * Gets as imposto
     *
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @return \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Imposto
     */
    public function getImposto()
    {
        return $this->imposto;
    }

    /**
     * Sets a new imposto
     *
     * Tributos incidentes nos produtos ou serviços da NF-e
     *
     * @param \NFePHP\NFe\NFe\TNFe\InfNFe\Det\Imposto $imposto
     * @return self
     */
    public function setImposto(\NFePHP\NFe\NFe\TNFe\InfNFe\Det\Imposto $imposto)
    {
        $this->imposto = $imposto;
        return $this;
    }

    /**
     * Gets as impostoDevol
     *
     * @return \NFePHP\NFe\NFe\TNFe\InfNFe\Det\ImpostoDevol
     */
    public function getImpostoDevol()
    {
        return $this->impostoDevol;
    }

    /**
     * Sets a new impostoDevol
     *
     * @param \NFePHP\NFe\NFe\TNFe\InfNFe\Det\ImpostoDevol $impostoDevol
     * @return self
     */
    public function setImpostoDevol(\NFePHP\NFe\NFe\TNFe\InfNFe\Det\ImpostoDevol $impostoDevol)
    {
        $this->impostoDevol = $impostoDevol;
        return $this;
    }

    /**
     * Gets as infAdProd
     *
     * Informações adicionais do produto (norma referenciada, informações
     * complementares, etc)
     *
     * @return string
     */
    public function getInfAdProd()
    {
        return $this->infAdProd;
    }

    /**
     * Sets a new infAdProd
     *
     * Informações adicionais do produto (norma referenciada, informações
     * complementares, etc)
     *
     * @param string $infAdProd
     * @return self
     */
    public function setInfAdProd($infAdProd)
    {
        $this->infAdProd = $infAdProd;
        return $this;
    }


}

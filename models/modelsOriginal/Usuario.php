<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $COD_USUARIO
 * @property string $USUARIO
 * @property string $SENHA
 * @property string $DATA_CADASTRO
 * @property integer $ATIVO
 * @property integer $COD_PESSOA
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Menu[] $menus
 * @property MovimentoEstoque[] $movimentoEstoques
 * @property PrecoLeite[] $precoLeites
 * @property Pessoa $cODPESSOA
 * @property Venda[] $vendas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DATA_CADASTRO'], 'safe'],
            [['ATIVO', 'COD_PESSOA'], 'integer'],
            [['COD_PESSOA'], 'required'],
            [['USUARIO', 'SENHA'], 'string', 'max' => 10],
            [['USUARIO'], 'unique'],
            [['COD_PESSOA'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['COD_PESSOA' => 'COD_PESSOA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_USUARIO' => 'Cod  Usuario',
            'USUARIO' => 'Usuario',
            'SENHA' => 'Senha',
            'DATA_CADASTRO' => 'Data  Cadastro',
            'ATIVO' => 'Ativo',
            'COD_PESSOA' => 'Cod  Pessoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentoEstoques()
    {
        return $this->hasMany(MovimentoEstoque::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecoLeites()
    {
        return $this->hasMany(PrecoLeite::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPESSOA()
    {
        return $this->hasOne(Pessoa::className(), ['COD_PESSOA' => 'COD_PESSOA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }
}

using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Fa_sai
{
    #region Data_invoice
    public class Data_invoice
    {
        #region Member Variables
        protected int _id_;
        protected string _invoice_number;
        protected unknown _invoice_date;
        protected string _buppin_number;
        protected string _qty_invoice;
        protected string _supplier;
        protected string _kind;
        protected string _price_invoiceseribu;
        protected string _price_invoicesatu;
        protected string _price_total;
        protected string _periode;
        #endregion
        #region Constructors
        public Data_invoice() { }
        public Data_invoice(string invoice_number, unknown invoice_date, string buppin_number, string qty_invoice, string supplier, string kind, string price_invoiceseribu, string price_invoicesatu, string price_total, string periode)
        {
            this._invoice_number=invoice_number;
            this._invoice_date=invoice_date;
            this._buppin_number=buppin_number;
            this._qty_invoice=qty_invoice;
            this._supplier=supplier;
            this._kind=kind;
            this._price_invoiceseribu=price_invoiceseribu;
            this._price_invoicesatu=price_invoicesatu;
            this._price_total=price_total;
            this._periode=periode;
        }
        #endregion
        #region Public Properties
        public virtual int Id_
        {
            get {return _id_;}
            set {_id_=value;}
        }
        public virtual string Invoice_number
        {
            get {return _invoice_number;}
            set {_invoice_number=value;}
        }
        public virtual unknown Invoice_date
        {
            get {return _invoice_date;}
            set {_invoice_date=value;}
        }
        public virtual string Buppin_number
        {
            get {return _buppin_number;}
            set {_buppin_number=value;}
        }
        public virtual string Qty_invoice
        {
            get {return _qty_invoice;}
            set {_qty_invoice=value;}
        }
        public virtual string Supplier
        {
            get {return _supplier;}
            set {_supplier=value;}
        }
        public virtual string Kind
        {
            get {return _kind;}
            set {_kind=value;}
        }
        public virtual string Price_invoiceseribu
        {
            get {return _price_invoiceseribu;}
            set {_price_invoiceseribu=value;}
        }
        public virtual string Price_invoicesatu
        {
            get {return _price_invoicesatu;}
            set {_price_invoicesatu=value;}
        }
        public virtual string Price_total
        {
            get {return _price_total;}
            set {_price_total=value;}
        }
        public virtual string Periode
        {
            get {return _periode;}
            set {_periode=value;}
        }
        #endregion
    }
    #endregion
}
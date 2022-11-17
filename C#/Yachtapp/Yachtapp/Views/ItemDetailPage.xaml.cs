using System.ComponentModel;
using Xamarin.Forms;
using Yachtapp.ViewModels;

namespace Yachtapp.Views
{
    public partial class ItemDetailPage : ContentPage
    {
        public ItemDetailPage()
        {
            InitializeComponent();
            BindingContext = new ItemDetailViewModel();
        }
    }
}